<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*,java.io.*"%>
<%
try{
String name=request.getParameter("name");


Class.forName("com.mysql.jdbc.Driver");
Connection conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/student","root","meena9322");
PreparedStatement ps=conn.prepareStatement("insert into subscriber values(?)");
ps.setString(1,name);

ps.executeUpdate();
response.sendRedirect("main.html");
out.println("Record Inserted Successfully...!");
ps.close();
conn.close();
}
catch(Exception e)
{out.println(e);
}
%>