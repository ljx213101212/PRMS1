package sg.edu.nus.iss.phoenix.schedule.service;

import java.sql.SQLException;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

import sg.edu.nus.iss.phoenix.core.dao.DAOFactoryImpl;
import sg.edu.nus.iss.phoenix.radioprogram.dao.ProgramDAO;
import sg.edu.nus.iss.phoenix.radioprogram.entity.RadioProgram;
import sg.edu.nus.iss.phoenix.schedule.dao.ScheduleDAO;
import sg.edu.nus.iss.phoenix.schedule.entity.AnnualSchedule;
import sg.edu.nus.iss.phoenix.schedule.entity.ProgramSlot;
import sg.edu.nus.iss.phoenix.schedule.entity.WeeklySchedule;

public class ReviewSelectScheduleService {

    DAOFactoryImpl factory;
    ScheduleDAO psDAO;

    public ReviewSelectScheduleService() {
        super();
        // TODO Auto-generated constructor stub
        factory = new DAOFactoryImpl();
        psDAO = factory.getScheduleDAO();
    }

    public List<ProgramSlot> reviewSelectProgramSlot() {
        List<ProgramSlot> data = null;
        try {
            data = psDAO.loadAllProgramSlot();
        } catch (SQLException ex) {
            Logger.getLogger(ReviewSelectScheduleService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return data;
    }

    public List<AnnualSchedule> reviewSelectAnnualSchedule() {

        List<AnnualSchedule> data = null;
        try {
            data = psDAO.loadAllAnnualSchedule();
        } catch (SQLException ex) {
            Logger.getLogger(ReviewSelectScheduleService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return data;

    }

    public List<WeeklySchedule> reviewSelectWeeklySchedule() {

        List<WeeklySchedule> data = null;
        try {
            data = psDAO.loadAllWeeklySchedule();
        } catch (SQLException ex) {
            Logger.getLogger(ReviewSelectScheduleService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return data;
    }

}
