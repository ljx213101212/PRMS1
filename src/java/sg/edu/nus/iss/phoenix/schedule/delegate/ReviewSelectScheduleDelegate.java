package sg.edu.nus.iss.phoenix.schedule.delegate;

import java.util.List;
import sg.edu.nus.iss.phoenix.schedule.entity.AnnualSchedule;
import sg.edu.nus.iss.phoenix.schedule.entity.ProgramSlot;
import sg.edu.nus.iss.phoenix.schedule.entity.WeeklySchedule;
import sg.edu.nus.iss.phoenix.schedule.service.ReviewSelectScheduleService;

public class ReviewSelectScheduleDelegate {
    private ReviewSelectScheduleService service;
    
	public ReviewSelectScheduleDelegate() {
		service = new ReviewSelectScheduleService();
	}
	
	public List<ProgramSlot> reviewSelectProgramSlot() {
		return service.reviewSelectProgramSlot();	
	}
        
        public List<AnnualSchedule> reviewSelectAnnualSchedule(){
                return service.reviewSelectAnnualSchedule();
        }
        
        public List<WeeklySchedule> reviewSelectWeeklySchedule(){
                return service.reviewSelectWeeklySchedule();
        }

}
