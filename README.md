# finalproject : My Secrete Calendar

# What does this project do?

  I Make a calendar accessible by signing up and logging in.
You can organize your schedule in a calendar. 



# Why is this project useful? 

  Sometimes people get confused when I make a team project or a study appointment. Because there are so many conversations in the process of making an appointment. So we finally set date and are confused with the previous contents.
Simply setting a date with a messenger can be confusing because of a number of other add-ons, and recording on a personal calendar can cause communication problems between team members. So I made a security calendar just for the project and the team members.
   My project is especially useful when you want to make your calendar accessible to only a few people on an open computer.
Members of each team can sign up for this calendar. And members can access the calendar through login, teams can share the same calendar, and share each other's schedules.


# How to get started?

  first, connect to your Raspberry Pie server. 
      Turn off nginx through 'sudo systemctl stopnginx', and start apache server through 'sudo service apache2 restart'. 
  
  Second, clone my git repository. 
  
  After that, create mysql database. 
  (If you are not a mysql user, please refer to the 2022_1 OSSLab, 18 CMS lecture. If you are a mysql user, you can create a database.)
      Make the database name 0811 member.
      Then open the db.php file and replace the parentheses in the new mysql with "localhost", "mysqlusername", "password", and "0811 member". 
  (If the process of creating a database and importing a spl file is difficult, see 2022_1 OSSLab, 19 Web chat room pdf. )
  
  Fourth, write this command to sudo cp final/ /var/www/html/ with sudo privileges.
  
  Fifth, write RaspberryPieaddress/final/login on the top bar.


# Where can people get more help, if needed? 
  
  For information on implementing the login page and connecting to the database, see your blog.
You can get help in the OSS lecture on how to use MySQL.
I referred to this git repository for how to implement the calendar.

  If you need more help, please send me e-mail. alsrud374@handong.ac.kr

# Presentation Video (YouTube) Link

https://youtu.be/iFu9klbteGI



# Clearly indicate what your contribution to your project is.

  I learned how to create a login page from a blog and took a project that implements a calendar from git. I combine these two, and I implemented the part where the login information is stored in the database.
  First, I made a database of '0811.db' in mysql using the method I learned in class, and I wrote the code of 0811db.spl by referring to the spl code of chatroom. And I imported it and made a table. 
The implementation of each function to create Loginpage was referenced in the contents of the blog, but I learned how to use php in order to set the path of each page, set the title of the web page, and set the name of the login page to the project name of the project.
