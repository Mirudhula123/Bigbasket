<%@page import="project.ConnectionProvider.*" %>
<%@page import="java.sql.*" %>
<%
String email=request.getParameter("email");
String password=request.getParameter("password");
if("admin@gmail.com".equals(email) && "admin".equals(password))
{
	session.setAttribute("email",email);
	response.sendRedirect("main.html");
}
else{
	int z=0;
    try
    {
	  Class.forName("com.mysql.jdbc.Driver");
	  Connection con=DriverManager.getConnection("JDBC:mysql://localhost:3306/signup","root","");
	  Statement st=con.createStatement();
	  ResultSet rs=st.executeQuery("select *from user where email='"+email+"' and password='"+password+"'");
	  while(rs.next()){
	    z=1;
		session.setAttribute("email",email);
		response.sendRedirect("index.html");
	  }
	if(z==0)
		response.sendRedirect("login.jsp?msg=notexist");
    }
   catch(Exception e){
	System.out.println(e);
	response.sendRedirect("login.jsp?msg=invalid");
   }
}
%>

