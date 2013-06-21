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
                    <form action="">    
                        <table style="font-size: x-large; font-family: \'Kefa\'; color: whitesmoke;margin: 0 auto">
                            <tr>

                                <td>Robot Name</td>
                                <td><input type="password" id="robot"></input></td>
                            </tr>
                            <tr>
                                <td>School Name</td>
                                <td><input type="text" id="school"></input></td>
                            </tr>
                            <tr>
                                <td>School Address</td>
                                <td><input type="text" id="address"></td>
                            </tr>
                            <tr>
                                <td>Name of Principal</td>
                                <td><input type="text" id="principal"></td>
                            </tr>
                            <tr>
                                <td>Name of Teacher in Charge</td>
                                <td><input type="text" id="teacher"></td>
                            </tr>
                            <tr>
                                <td>Contact Number of Teacher in Charge</td>
                                <td><input type="text" id="teacherno"></td>
                            </tr>
                            <tr>
                                <td>Team Members</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 1(Team Leader)</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td>Student Name</td>
                                <td><input type="text" id="mem1name"></td>                            
                            </tr>
                            <tr>
                                <td>Grade </td>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem1grade"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>	
                                <td><input type="email" id="mem1email"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>	
                                <td><input type="text" id="mem1no"></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 2</td>	
                                <td></td>
                            </tr>
                            <tr>

                                <td>Student Name</td>
                                <td><input type="text" id="mem2name"></td>                            
                            </tr>
                            <tr>
                                <td>Grade </td>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem2grade"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>	
                                <td><input type="email" id="mem2email"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>	
                                <td><input type="text" id="mem2no"></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 3</td>	
                                <td></td>
                            </tr>
                            <tr>

                                <td>Student Name</td>
                                <td><input type="text" id="mem3name"></td>                            
                            </tr>
                            <tr>
                                <td>Grade </td>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem3grade"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>	
                                <td><input type="email" id="mem3email"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>	
                                <td><input type="text" id="mem3no"></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 4</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td>Student Name</td>
                                <td><input type="text" id="mem4name"></td>                            
                            </tr>
                            <tr>
                                <td>Grade </td>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem4grade"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>	
                                <td><input type="email" id="mem4email"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>	
                                <td><input type="text" id="mem4no"></td>
                            </tr>
                            <tr>
                                <td style="height:70px ">Member 5</td>
                                <td></td>
                            </tr>
                            <tr>

                                <td>Student Name</td>
                                <td><input type="text" id="mem5name"></td>                            
                            </tr>
                            <tr>
                                <td>Grade </td>
                                <td><input type="number" size="13" min="1" max="13" value ="8" id="mem5grade"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>	
                                <td><input type="email" id="mem5email"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>	
                                <td><input type="text" id="mem5no"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Submit" onclick="register_school_submit()"/></td>
                            </tr>
                        </table>
                        
                    </form>';
?>
