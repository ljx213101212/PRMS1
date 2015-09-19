/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.schedule.controller;

import at.nocturne.api.Action;
import at.nocturne.api.Perform;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import sg.edu.nus.iss.phoenix.schedule.delegate.ReviewSelectScheduleDelegate;
import sg.edu.nus.iss.phoenix.schedule.entity.AnnualSchedule;
import sg.edu.nus.iss.phoenix.schedule.entity.ProgramSlot;
import sg.edu.nus.iss.phoenix.schedule.entity.WeeklySchedule;

/**
 *
 * @author jixiang
 */
@Action("managers")
public class ManageScheduleCmd implements Perform {

    @Override
    public String perform(String path, HttpServletRequest req, HttpServletResponse resp) throws IOException, ServletException {
        ReviewSelectScheduleDelegate del = new ReviewSelectScheduleDelegate();
        List<AnnualSchedule> annualScheduleList = del.reviewSelectAnnualSchedule();
        List<ProgramSlot> data = getAllProgramSlots(annualScheduleList);
        req.setAttribute("rps", data);
        return "/pages/crudps.jsp";
    }
    
    
    public List<ProgramSlot> getAllProgramSlots(List<AnnualSchedule> annualList){
        
        List<ProgramSlot> result = new ArrayList<ProgramSlot>();
        
        Iterator<AnnualSchedule> iter = annualList.iterator();
        while(iter.hasNext()){
            AnnualSchedule annualSchedule = iter.next();
            List<WeeklySchedule> weeklyList = annualSchedule.getWeeklySchedule();
            Iterator<WeeklySchedule> iter2 = weeklyList.iterator();
            while(iter2.hasNext()){
                WeeklySchedule weeklySchedule = iter2.next();
                List<ProgramSlot> programList = weeklySchedule.getProgramSlotList();
                if (programList.size() > 0 ){
                    result.addAll(programList);
                }
                
            }
        }
        
        return result;
    }

}
