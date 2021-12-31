<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*,java.io.*"%>
<%
try{
String name=request.getParameter("name");
String address=request.getParameter("address");
String phoneno=request.getParameter("phoneno");
String message=request.getParameter("Message");

Class.forName("com.mysql.jdbc.Driver");
Connection conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/student","root","meena9322");
PreparedStatement ps=conn.prepareStatement("insert into contact values(?,?,?,?)");
ps.setString(1,name);
ps.setString(2,address);
ps.setString(3,phoneno);
ps.setString(4,message);

ps.executeUpdate();
response.sendRedirect("contact.html");
out.println("Record Inserted Successfully...!");
ps.close();
conn.close();
}
catch(Exception e)
{out.println(e);
}
%>