<%@page import="project.ConnectionProvider.*" %>
<%@page import="java.sql.*" %>
<%
String email=request.getParameter("email");
String password=request.getParameter("password");
try{
	Class.forName("com.mysql.jdbc.Driver");
	Connection con=DriverManager.getConnection("JDBC:mysql://localhost:3306/student","root","meena9322");
  
    PreparedStatement ps=con.prepareStatement("insert into user values(?,?)");
	ps.setString(1,request.getParameter("email"));
	ps.setString(2,request.getParameter("password"));
	ps.executeUpdate();
	response.sendRedirect("index.html");

}catch(Exception e){
	  System.out.println(e);
	  response.sendRedirect("signup1.jsp?msg=invalid");
}
 
%>
