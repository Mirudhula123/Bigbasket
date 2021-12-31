<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*,java.io.*"%>
<%
try{
String brocoli=request.getParameter("brocoli");
String brinjal=request.getParameter("brinjal");
String beetroot=request.getParameter("beetroot");
String potato=request.getParameter("potato");
String cauliflower=request.getParameter("flower");
String carrot=request.getParameter("carrot");

Class.forName("com.mysql.jdbc.Driver");
Connection conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/student","root","meena9322");
PreparedStatement ps=conn.prepareStatement("insert into finalorder values(?,?,?,?,?,?)");
ps.setString(1,brocoli);
ps.setString(2,brinjal);
ps.setString(3,beetroot);
ps.setString(4,potato);
ps.setString(5,cauliflower);
ps.setString(6,carrot);
ps.executeUpdate();
response.sendRedirect("f.html");
out.println("Record Inserted Successfully...!");
ps.close();
conn.close();
}
catch(Exception e)
{out.println(e);
}
%>