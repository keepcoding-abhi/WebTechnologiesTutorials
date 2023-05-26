/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Abhishek;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.core.io.*;


/**
 *
 * @author abhi
 */
public class MainApp {
    //1:configure spring container
   // Resource resource = new ClassPathResource("ApplicationContext.xml");
   // BeanFactory factory = new XmlBeanFactory((org.springframework.core.io.Resource)resource);
    public static void main(String args[]){
        ApplicationContext context = new ClassPathXmlApplicationContext("ApplicationContext.xml");
    //2: using bean
        //Student student = (Student)context.getBean("student");
        Student student = context.getBean("student", Student.class);
    //3: calling functions
        System.out.println(student);
    //4: closing context
    }
}
