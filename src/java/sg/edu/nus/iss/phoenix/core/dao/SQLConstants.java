/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.core.dao;

/**
 *
 * @author jixiang
 */
public class SQLConstants {
    
    //ProgramDAO
    
    //create
    public static final String SQL_CREATE_PROGRAMS = "INSERT INTO `"+EntityConstants.RADIO_PROGRAM_TABLE+""
            + "` (`"+EntityConstants.RADIO_PROGRAM_NAME+""
            + "`, `"+EntityConstants.RADIO_PROGRAM_DESCRIPTION+""
            + "`, `"+EntityConstants.RADIO_PROGRAM_TYPICAL_DURATION+"`) VALUES (?,?,?)";
    
    //read
    public static final String SQL_LOAD_ALL_PROGRAMS="SELECT * FROM `"+EntityConstants.RADIO_PROGRAM_TABLE+"` ORDER BY `"+EntityConstants.RADIO_PROGRAM_NAME+"` ASC;";
    //update
    public static final String SQL_SAVE_PROGRAM="UPDATE `"+EntityConstants.RADIO_PROGRAM_TABLE+
            "` SET `"+EntityConstants.RADIO_PROGRAM_DESCRIPTION+"` = ?, `"+EntityConstants.RADIO_PROGRAM_TYPICAL_DURATION+"` = ? WHERE (`"+
            EntityConstants.RADIO_PROGRAM_NAME+"` = ? );";
    //delete
    public static final String SQL_DELETE_PROGRAM= "DELETE FROM `"+EntityConstants.RADIO_PROGRAM_TABLE+"` WHERE (`"+EntityConstants.RADIO_PROGRAM_NAME+"` = ? )";
    
    
    //search
    public static final String SQL_SEARCH_MATCHING_BASIC = "SELECT * FROM `"+EntityConstants.RADIO_PROGRAM_TABLE+
            "` WHERE 1=1 ";
    public static final String SQL_SEARCH_MATCHING_APPEND_LIKE_NAME = "AND `"+EntityConstants.RADIO_PROGRAM_NAME+""
            + "` LIKE '";
    public static final String SQL_SEARCH_MATCHING_APPEND_LIKE_DESCRIPTION = "AND `"+EntityConstants.RADIO_PROGRAM_DESCRIPTION+"` LIKE '";
    
    public static final String SQL_SEARCH_MATCHING_APPEND_ORDER_BY = "ORDER BY `"+EntityConstants.RADIO_PROGRAM_NAME+"` ASC";
    
    
    
    //Schedule
    
    public static final String SQL_LOAD_ALL_ANNUALSCHEDULES ="SELECT * FROM `"+EntityConstants.SCHEDULE_ANNUAL_TABLE+"` ORDER BY `"+EntityConstants.SCHEDULE_ANNUAL_YEAR+"` ASC;";
    public static final String SQL_LOAD_ALL_WEEKLYSCHEDULES ="SELECT * FROM `"+EntityConstants.SCHEDULE_WEEKLY_TABLE+"` ORDER BY `"+EntityConstants.SCHEDULE_WEEKLY_START_DATE+"` ASC;";
    public static final String SQL_LOAD_ALL_PROGRAMSLOT ="SELECT * FROM `"+EntityConstants.SCHEDULE_PROGRAM_SLOT_TABLE+"` ORDER BY `"+EntityConstants.SCHEDULE_PROGRAM_SLOT_PROGRAM_NAME+"` ASC;";
}
