package sg.edu.nus.iss.phoenix.presenter.entity;
import java.io.Serializable;
import java.util.Date;
import sg.edu.nus.iss.phoenix.radioprogram.entity.RadioProgram;
import sg.edu.nus.iss.phoenix.utils.DateFormat;
import java.text.ParseException;


public class Presenter implements Cloneable, Serializable {

    /**
	 * eclipse identifier
	 */
	private static final long serialVersionUID = -5500218812568593553L;
	
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author ADMIN
 */
        
    private String id;
    private String name;
    
    public Presenter()
    {
        this.id="";
        this.name="";
    }
    
     public Presenter(String id){
        this.id=id;
        this.name = "";
    }
    
    public Presenter(String id, String name) {
        this.id = id;
        this.name = name;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }


    
}
