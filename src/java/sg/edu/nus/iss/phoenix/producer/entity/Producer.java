package sg.edu.nus.iss.phoenix.producer.entity;
import java.io.Serializable;
import java.util.Date;
import sg.edu.nus.iss.phoenix.radioprogram.entity.RadioProgram;
import sg.edu.nus.iss.phoenix.utils.DateFormat;
import java.text.ParseException;


public class Producer implements Cloneable, Serializable {

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

    public Producer(){
        this.id = "";
        this.name = "";
    }
    
    public Producer(String id){
        this.id=id;
        this.name = "";
    }
    
    public Producer(String id, String name){
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
