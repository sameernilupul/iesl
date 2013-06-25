<?php
echo '<p style ="color: gold;">Registeration for School Catagory</p>';
echo 
'<p>Fill the following form and submit or <a href="res/IESL-RoboGames-2013-School-Application.pdf"> download the application form </a> and send the completed applications to IESL</p>
                    <p>(1) By E-mail to amilastbmmv@gmail.com as MS Word attachments, with the subject line "Robo Games 2013"</p>
                    <p>(2) By Post to</p>
                    <p>Chairman – IT and Communications Engineering Sectional Committee<br/>
                        c/o Executive Secretary<br/>
                        Institution of Engineers, Sri Lanka<br/>
                        /15 Wijerama Mawatha<br/>
                        Colombo 07<br/></p>
                    <form class ="form" action="">    
                        <table style="font-size: x-large; font-family: \'Kefa\'; color: whitesmoke;margin: 0 auto">
                            <td><p style ="color: gold;">General Details</p></td>
                            <tr>
                                <td><input type="text" id="robot"></input>
                                <label for="name">Robot Name</label> 
                                </td>          
                            </tr>
                            <tr>
                                <td><input type="text" id="school"></input>
                                <label for="name">School Name</label> 
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" id="address">
                                <label for="name">School Address</label>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" id="principal">
                                <label for="name">Name of Principal</label>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" id="teacher">
                                <label for="name">Teacher in Charge</label>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" id="teacherno">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <br/>
                                <td><p style ="color: gold;">Team Members</p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 1(Team Leader)</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td><input type="text" id="mem1name">
                                <label for="name">Student Name</label>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem1grade">
                                <label for="name">Grade</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="email" id="mem1email">
                                <label for="name">Email Address</label>
                                </td> 
                            </tr>
                            <tr>
                                <td><input type="text" id="mem1no">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 2</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td><input type="text" id="mem2name">
                                <label for="name">Student Name</label>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem2grade">
                                <label for="name">Grade</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="email" id="mem2email">
                                <label for="name">Email Address</label>
                                </td> 
                            </tr>
                            <tr>
                                <td><input type="text" id="mem2no">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 3</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td><input type="text" id="mem3name">
                                <label for="name">Student Name</label>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem3grade">
                                <label for="name">Grade</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="email" id="mem3email">
                                <label for="name">Email Address</label>
                                </td> 
                            </tr>
                            <tr>
                                <td><input type="text" id="mem3no">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 4</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td><input type="text" id="mem4name">
                                <label for="name">Student Name</label>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem4grade">
                                <label for="name">Grade</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="email" id="mem4email">
                                <label for="name">Email Address</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="text" id="mem4no">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 5</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td><input type="text" id="mem5name">
                                <label for="name">Student Name</label>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem5grade">
                                <label for="name">Grade</label>
                                </td> 
                            </tr>
                            <tr>	
                                <td><input type="email" id="mem5email">
                                <label for="name">Email Address</label>
                                </td> 
                            </tr>
                            <tr>
                                <td><input type="text" id="mem5no">
                                <label for="name">Contact No</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <p class="submit">
                                <input type="button" value="Submit" onclick="register_school_submit()"/>
                                </p >
                                </td>
                            </tr>
                        </table>
                        
                    </form>';
?>
