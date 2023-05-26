/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Abhishek;

import org.springframework.stereotype.Component;

/**
 *
 * @author abhi
 */
@Component("mybean")
public class Student {
    private int rollNum;
    private String name;
    private Address address;
    
    public Student(int roll, String name, Address add){
        super();
        this.name = name;
        this.rollNum = roll;
        this.address = add;
    }

    public String getName() {
        return name;
    }

    public int getRollNum() {
        return rollNum;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setRollNum(int rollNum) {
        this.rollNum = rollNum;
    }

    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }
    
    
    
    @Override
    public String toString(){
        return name + "\t" + rollNum + "\t" + address;
    }
    
    
}
