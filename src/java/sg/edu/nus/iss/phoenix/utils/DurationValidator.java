/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.utils;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 *
 * @author jixiang
 */
public class DurationValidator {
    
          private Pattern pattern;
	  private Matcher matcher;
 
	  private static final String TIME24HOURS_PATTERN = 
                 "([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]";
	  
	  public DurationValidator(){
		  pattern = Pattern.compile(TIME24HOURS_PATTERN);
	  }
	  
	  /**
	   * Validate time in 24 hours format with regular expression
	   * @param time time address for validation
	   * @return true valid time fromat, false invalid time format
	   */
	  public boolean validate(final String time){
		  
		  matcher = pattern.matcher(time);
		  return matcher.matches();
	    	    
	  }
    
}
