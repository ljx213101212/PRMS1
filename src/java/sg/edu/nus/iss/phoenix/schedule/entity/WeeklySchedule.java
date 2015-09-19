/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.schedule.entity;

import java.util.Date;
import java.util.List;
import sg.edu.nus.iss.phoenix.schedule.delegate.ReviewSelectScheduleDelegate;

/**
 *
 * @author ADMIN
 */
public class WeeklySchedule {
    
    
    private Date startDate;
    private String assignedBy;
    private List<ProgramSlot> programSlotList;

    public WeeklySchedule() {
        
    }
    
    public void retriveProgramSlotList(){
        ReviewSelectScheduleDelegate del = new ReviewSelectScheduleDelegate();
        programSlotList = del.reviewSelectProgramSlot();
    }

    public WeeklySchedule(String assignedBy) {
        this.assignedBy = assignedBy;
    }

 
    public Date getStartDate() {
        return startDate;
    }

    public void setStartDate(Date startDate) {
        this.startDate = startDate;
    }

    public String getAssignedBy() {
        return assignedBy;
    }

    public void setAssignedBy(String assignedBy) {
        this.assignedBy = assignedBy;
    }

    public List<ProgramSlot> getProgramSlotList() {
        return programSlotList;
    }

 

   
}
