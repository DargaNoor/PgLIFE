# PgLIFE
This is website build for people who are searching for PG's nearby especially for Students. I did this during the training done at **Internshala Training** Course.
Tools used are VSC, XAMPP. 
Front-End technologies are done by using HTML,CSS,,BOOSTRAP,JS and Back-End by PHP,MYSQL.
It contains the basic Index page with Signup and Login options and consists of Cities like Bengaluru, Hyderabad etc for searching PG's. A user can login and can
keep track of PG's list of which PG's he/she are interested in. A PG rating is sorted using the maintainence, facilities available etc. Interested user can just
go through the address mentioned in the View option of particular PG. User can search the PG's list according to Lowest or Highest Rent first or can do through
Gender(Male, Female, Unisex). Once a user created account he/she can check once the entered details in the Dashboard Section.
The details entered through the sign up form will be directly updated to the database MYSQL through PHP code. Only Admin has all access to the (those who have created accounts)members names, wishlist of PG's, passowrds etc.


package com.example;

import java.io.IOException;
import java.util.HashMap;
import java.util.Map;

import javax.security.auth.callback.Callback;
import javax.security.auth.callback.CallbackHandler;
import javax.security.auth.callback.UnsupportedCallbackException;

import org.apache.cxf.frontend.ClientProxyFactoryBean;
import org.apache.cxf.interceptor.LoggingInInterceptor;
import org.apache.cxf.interceptor.LoggingOutInterceptor;
import org.apache.cxf.ws.security.WSS4JOutInterceptor;
import org.apache.wss4j.common.ext.WSPasswordCallback;
import org.apache.wss4j.dom.WSConstants;
import org.apache.wss4j.dom.handler.WSHandlerConstants;

public class WSSecurityClient {

    public static void main(String[] args) {
        ClientProxyFactoryBean factory = new ClientProxyFactoryBean();
        factory.setServiceClass(MyService.class);
        factory.setAddress("http://example.com/soap");

        // Add logging interceptors
        factory.getInInterceptors().add(new LoggingInInterceptor());
        factory.getOutInterceptors().add(new LoggingOutInterceptor());

        // Configure WS-Security
        Map<String, Object> outProps = new HashMap<>();
        outProps.put(WSHandlerConstants.ACTION, WSHandlerConstants.USERNAME_TOKEN + " " + WSHandlerConstants.ENCRYPT);
        outProps.put(WSHandlerConstants.USER, "B000200206");
        outProps.put(WSHandlerConstants.PASSWORD_TYPE, WSConstants.PW_TEXT);
        outProps.put(WSHandlerConstants.PW_CALLBACK_CLASS, ClientPasswordCallback.class.getName());

        outProps.put(WSHandlerConstants.ENCRYPTION_USER, "uat");
        outProps.put(WSHandlerConstants.ENC_PROP_FILE, "client_encrypt.properties");
        outProps.put(WSHandlerConstants.ENC_KEY_IDENTIFIER, "BinarySecurityToken");

        WSS4JOutInterceptor wssOut = new WSS4JOutInterceptor(outProps);
        factory.getOutInterceptors().add(wssOut);

        // Create the service client
        MyService client = (MyService) factory.create();

        // Call the service
        client.myServiceMethod();
    }

    public static class ClientPasswordCallback implements CallbackHandler {
        @Override
        public void handle(Callback[] callbacks) throws IOException, UnsupportedCallbackException {
            for (Callback callback : callbacks) {
                if (callback instanceof WSPasswordCallback) {
                    WSPasswordCallback pc = (WSPasswordCallback) callback;
                    if ("B000200206".equals(pc.getIdentifier())) {
                        pc.setPassword("abcdefgh12");
                    }
                }
            }
        }
    }

    // Define the service interface
    public interface MyService {
        void myServiceMethod();
    }
}




org.apache.ws.security.crypto.provider=org.apache.wss4j.common.crypto.Merlin
org.apache.ws.security.crypto.merlin.keystore.type=jks
org.apache.ws.security.crypto.merlin.file=/absolute/path/to/uat_EfillPublickey.jks
org.apache.ws.security.crypto.merlin.keystore.password=Abc@1234
org.apache.ws.security.crypto.merlin.keystore.alias=uat
