package sg.edu.nus.iss.phoenix.schedule.delegate;

import java.util.Date;

import sg.edu.nus.iss.phoenix.schedule.entity.ProgramSlot;
import sg.edu.nus.iss.phoenix.schedule.service.ScheduleService;


public class ScheduleDelegate {
/*	
	public ArrayList<RadioProgram> searchPrograms(RPSearchObject rpso) {
		RadioProgram rp = new RadioProgram(rpso.getName());
		rp.setDescription(rpso.getDescription());
		ProgramService service = new ProgramService();
		return service.searchPrograms(rp);	
	}
	
	public ArrayList<RadioProgram> findRPByCriteria(RPSearchObject rpso) {
		RadioProgram rp = new RadioProgram(rpso.getName());
		rp.setDescription(rpso.getDescription());
		ProgramService service = new ProgramService();
		return service.searchPrograms(rp);	
	}
	
	public RadioProgram findRP(String rpName) {
		RadioProgram rp = new RadioProgram(rpName);
		ProgramService service = new ProgramService();
		return (service.searchPrograms(rp)).get(0);	
		
	}
	public ArrayList<RadioProgram> findAllRP() {
		ProgramService service = new ProgramService();
		return service.findAllRP();
		
	}
*/	
	public void processCreate(ProgramSlot ps) {
		ScheduleService service = new ScheduleService();
		service.processCreate(ps);
		
	}
	public void processModify(ProgramSlot ps) {
		ScheduleService service = new ScheduleService();
		service.processModify(ps);
		
	}

	public void processDelete(String name) {
		ScheduleService service = new ScheduleService();
		service.processDelete(name);
	}
        
        public Date getDateValueOfString(String time){
        ScheduleService service = new ScheduleService();
        return service.getDateValueOfString(time);
    }
}
