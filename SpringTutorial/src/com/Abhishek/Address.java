/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Abhishek;

/**
 *
 * @author abhi
 */
public class Address {
    private String address;
    public Address(String address){
        this.address = address;
    }
    public String getAddress(){
        return address;
    }
    
    public void setAddress(String add){
        address = add;
    }
    
    @Override
    public String toString(){
        return address;
    }
    
}
