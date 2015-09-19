/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.utils;

import java.util.List;

/**
 *
 * @author Santhosh Kumar
 */
public class RecordDisplay {
    private int pageNo = 1;
    private int numberPerPage = 10;
    private List<String> orders = null;
    
    private static final RecordDisplay defaultCriteria = new RecordDisplay();
    
    public RecordDisplay(){
        
    }
    
    public static RecordDisplay getDefaultCriteria()
    {
        return defaultCriteria;
    }
}
