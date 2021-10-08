<?php include 'header2.php';?>
<section id="track number">
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center" style="color: white">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
                <div class="col">
                    <input name="Consignment" type="text" class="form-control" id="Consignment" maxlength="50" placeholder="TrackNo">
                </div>

                  <input name="Submit" type="submit" class="btn btn-primary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt"style="color: white" >Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" >&nbsp;</td>
    <td bgcolor="#2284d5">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
 <tr>
  <td>
</section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4"style="color: black">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="industries.html">Industry</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="track-status.php">Track Shipment</a></li>

                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4" style="color: black">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-heading mb-4"style="color: black">Subscribe Newsletter</h2><form action="https://getform.io/f/4e888c75-dff8-41b3-8b19-4cf9686c9437" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="submit" id="button-addon2">Send</button>

                            </div>
                        </div>
                    </form>
                </div>
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

                </p>
            </div>

        </div>
    </footer>
<?php include 'footer.php';?>