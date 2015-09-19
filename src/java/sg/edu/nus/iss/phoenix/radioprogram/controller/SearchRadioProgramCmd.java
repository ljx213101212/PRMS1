/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.radioprogram.controller;

import at.nocturne.api.Action;
import at.nocturne.api.Perform;
import java.io.IOException;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import sg.edu.nus.iss.phoenix.core.dao.EntityConstants;
import sg.edu.nus.iss.phoenix.radioprogram.delegate.ReviewSelectProgramDelegate;
import sg.edu.nus.iss.phoenix.radioprogram.entity.RadioProgram;

/**
 *
 * @author jixiang
 */

@Action("searchrp")
public class SearchRadioProgramCmd implements Perform{

    @Override
    public String perform(String path, HttpServletRequest req, HttpServletResponse resp) throws IOException, ServletException {
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
         ReviewSelectProgramDelegate del = new ReviewSelectProgramDelegate();
         RadioProgram rp = new RadioProgram();
         rp.setName(req.getParameter(EntityConstants.RADIO_PROGRAM_NAME));
         rp.setDescription(req.getParameter(EntityConstants.RADIO_PROGRAM_DESCRIPTION));
         
         List<RadioProgram> data = del.searchRadioPrgramDelegate(rp);
         req.setAttribute("rps",data);
         
         return "/pages/crudrp.jsp";
    }
    
    
}
