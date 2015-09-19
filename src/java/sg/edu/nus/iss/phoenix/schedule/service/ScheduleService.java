package sg.edu.nus.iss.phoenix.schedule.service;

import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;

import sg.edu.nus.iss.phoenix.core.dao.DAOFactoryImpl;
import sg.edu.nus.iss.phoenix.core.exceptions.NotFoundException;
import sg.edu.nus.iss.phoenix.schedule.dao.ScheduleDAO;
import sg.edu.nus.iss.phoenix.schedule.entity.ProgramSlot;

public class ScheduleService {
	DAOFactoryImpl factory;
	ScheduleDAO psDAO;

	public ScheduleService() {
		super();
		// TODO Auto-generated constructor stub
		factory = new DAOFactoryImpl();
		psDAO = factory.getScheduleDAO();
	}
/*
	public ArrayList<RadioProgram> searchPrograms(RadioProgram rpso) {
		ArrayList<RadioProgram> list = new ArrayList<RadioProgram>();
		try {
			list = (ArrayList<RadioProgram>) rpdao.searchMatching(rpso);
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return list;
	}

	public ArrayList<RadioProgram> findRPByCriteria(RadioProgram rp) {
		ArrayList<RadioProgram> currentList = new ArrayList<RadioProgram>();

		try {
			currentList = (ArrayList<RadioProgram>) rpdao.searchMatching(rp);
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		return currentList;

	}

	public RadioProgram findRP(String rpName) {
		RadioProgram currentrp = new RadioProgram();
		currentrp.setName(rpName);
		try {
			currentrp = ((ArrayList<RadioProgram>) rpdao
					.searchMatching(currentrp)).get(0);
			return currentrp;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return currentrp;

	}

	public ArrayList<RadioProgram> findAllRP() {
		ArrayList<RadioProgram> currentList = new ArrayList<RadioProgram>();
		try {
			currentList = (ArrayList<RadioProgram>) rpdao.loadAll();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return currentList;

	}
*/
	public void processCreate(ProgramSlot ps) {
		try {
			psDAO.create(ps);
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	public void processModify(ProgramSlot ps) {
		
			try {
				psDAO.save(ps);
			} catch (NotFoundException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		
	}

	public void processDelete(String name) {

            try {
                ProgramSlot rp = new ProgramSlot(); // Take care of this
                psDAO.delete(rp);
            } catch (NotFoundException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            } catch (SQLException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
	}
        
        public Date getDateValueOfString(String time){
        Date date = null;
        String dateString = "01-01-50:"+time+":00";
        SimpleDateFormat DATE_FORMAT = new SimpleDateFormat("dd-MM-yy:HH:mm:SS");
        try{
          date = DATE_FORMAT.parse(dateString);
        }catch(Exception e){
            e.printStackTrace();
        }
        return date;
        }
}
