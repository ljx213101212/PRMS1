/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package sg.edu.nus.iss.phoenix.producer.delegate;

import java.util.List;
import sg.edu.nus.iss.phoenix.producer.entity.Producer;
import sg.edu.nus.iss.phoenix.producer.service.ProducerService;
import sg.edu.nus.iss.phoenix.utils.RecordDisplay;

/**
 *
 * @author Santhosh Kumar
 */
public class ProducerDelegate {
    private ProducerService producerService;
    
    public ProducerDelegate() {
        producerService = new ProducerService();
    }
    
    public Producer findProducer(String id){
        return producerService.findProducer(id);
    }
    
    public List<Producer> findAllProducers(Producer example) {
        return producerService.findAllProducers(example);
    }
    
    public List<Producer> findAllProducers(Producer example, RecordDisplay criteria) {
        return producerService.findAllProducers(example, criteria);
    }
    
    public List<Producer> findAllProducers(){
        return producerService.findAllProducers();
    }
}
