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
public class EntityConstants {
    
    //User
    public static final String USER_TABLE = "user";
    public static final String USER_ID = "id";
    public static final String USER_NAME = "name";
    public static final String USER_PASSWORD = "password";
    public static final String USER_ROLE = "role";
    
    
    //Radio Program
    public static final String RADIO_PROGRAM_TABLE = "radio-program";
    public static final String RADIO_PROGRAM_NAME = "name";
    public static final String RADIO_PROGRAM_DESCRIPTION = "desc";
    public static final String RADIO_PROGRAM_TYPICAL_DURATION = "typicalDuration";
    
    //Schedule
    
    public static final String SCHEDULE_ANNUAL_TABLE="annual-schedule";
    public static final String SCHEDULE_ANNUAL_YEAR = "year";
    public static final String SCHEDULE_ANNUAL_ASSIGNED_BY="assignedBy";
    
    public static final String SCHEDULE_WEEKLY_TABLE="weekly-schedule";
    public static final String SCHEDULE_WEEKLY_START_DATE="startDate";
    public static final String SCHEDULE_WEEKLY_ASSIGNED_BY="assignedBy";
    
    public static final String SCHEDULE_PROGRAM_SLOT_TABLE="program-slot";
    public static final String SCHEDULE_PROGRAM_SLOT_DURATION="duration";
    public static final String SCHEDULE_PROGRAM_SLOT_DATE_OF_PROGRAM="dateOfProgram";
    public static final String SCHEDULE_PROGRAM_SLOT_START_TIME="startTime";
    public static final String SCHEDULE_PROGRAM_SLOT_PROGRAM_NAME="program-name";

}
