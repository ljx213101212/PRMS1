package sg.edu.nus.iss.phoenix.schedule.entity;

import java.io.Serializable;
import java.sql.Time;
import java.util.Date;
import java.util.List;
import sg.edu.nus.iss.phoenix.schedule.delegate.ReviewSelectScheduleDelegate;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

/**
 *
 * @author ADMIN
 */
public class AnnualSchedule implements Cloneable, Serializable {

    private static final long serialVersionUID = -5500218812568593553L;

    private String assignedBy;
    private int year;
    private List <WeeklySchedule> weeklyScheduleList;

    public AnnualSchedule() {
    }

    public List<WeeklySchedule> getWeeklySchedule() {
        return weeklyScheduleList;
    }

    public void retriveAllWeeklySchedule() {
        ReviewSelectScheduleDelegate del = new ReviewSelectScheduleDelegate();
        weeklyScheduleList = del.reviewSelectWeeklySchedule();

    }

    public String getAssignedBy() {
        return assignedBy;
    }

    public void setAssignedBy(String assignedBy) {
        this.assignedBy = assignedBy;
    }

    public int getYear() {
        return year;
    }

    public void setYear(int year) {
        this.year = year;
    }

}
