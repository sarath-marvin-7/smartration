/*
document.querySelector('.items__btns--view').addEventListener('click', () => {
  var html = `<div class="add-shipper__outline"><div class="add-authenticator__outline"><table class="container__table"><tr class="container__table--heading-row"><th class="container__table--headings">SHIPPER ID</th><th class="container__table--headings">NAME</th><th class="container__table--headings">DOB</th>
                        <th class="container__table--headings">MOBILE</th>
                        <th class="container__table--headings">EMAIL</th>
                        </tr>
                        <tr class="container__table--row">
                        <td class="container__table--items">1234567890</td>
                        <td class="container__table--items">SHIPPER1</td>
                        <td class="container__table--items">10-10-2020</td>
                        <td class="container__table--items">9090909090</td>
                        <td class="container__table--items">shipper@gmail.com</td>
                        </tr>
                       </table>                     
                       </div>
                   </div>`;
    
    document.querySelector('.add-shipper').innerHTML = '';
        if(document.querySelector('.add-shipper').innerHTML === ''){
            document.querySelector('.add-shipper').insertAdjacentHTML('beforeend', html);
        }                 
});
*/

document.querySelector('.items__btns--add').addEventListener('click', () => {
    var markup = `<div class="add-shipper__outline">
                        <div class="add-shipper__page">
                        <form action="Secretary_Addshipper.php" method="post">
                         <div class="add-shipper__page-details">  
                          <div class="add-ship__content-left">
                              <p class="add-ship__para">Please fillout the Following Details</p>
                              <div class="add-ship__row">
                                  <div class="add-ship__col1"><label class="label">Name</label></div>
                                  <div class="add-ship__col2">
                                      <input type="text" name="name" class="inputtxt" required>
                                  </div>
                              </div>                            
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1">
                                  <label class="label">Mother's Name</label>   
                                 </div>
                                  <div class="add-ship__col2">
                                      <input type="text" name="mothername" class="inputtxt" required>
                                  </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Caste</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="caste" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Nationality</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="nationality" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">DoorNo / Street</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="street" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">District</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="district" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Mobile</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="mobile" class="inputtxt" required>
                                 </div>
                              </div>                                  
                          </div>
                          
                          
                          <div class="add-ship__content-right">
                             <p class="add-ship__para">&nbsp;</p>
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Father's Name</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="fathername" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">D.O.B</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="dob" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Religion</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="religion" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">Highest Qualification</label></div>
                                 <div class="add-ship__col2">
                                  <select class="select-box" name="qualification" required>
                                        <option value="------SELECT------" class="select-option" selected>----------- SELECT ------------</option>
                                        <option value="SSLC" class="select-option">SSLC</option>
                                        <option value="12th" class="select-option">12th</option>
                                        <option value="Diploma / ITI" class="select-option">Diploma / ITI</option>
                                        <option value="Degree" class="select-option">Degree</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">City</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="city" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">State</label></div>
                                 <div class="add-ship__col2">
                                    <input type="text" name="state" class="inputtxt" required>
                                 </div>
                              </div>
                              
                              <div class="add-ship__row">
                                 <div class="add-ship__col1"><label class="label">E-mail</label></div>
                                 <div class="add-ship__col2">
                                    <input type="email" name="email" class="inputtxt" required>
                                 </div>
                              </div>
                          </div>
                      </div>
                    
                    <div class="add-shipper__page-submit">
                        <div class="page-submit__check">
                            <input type="checkbox" name="check" class="page-submit__checkbox" required> Confirm Shipper Details? 
                        </div>
                        
                        <div class="page-submit__button">
                            <input type="submit" value="SUBMIT" class="items__btns" name="add-shipper">
                        </div>
                    </div>
                    </form>
                    </div>`; 
    
    document.querySelector('.add-shipper').innerHTML = '';
        if(document.querySelector('.add-shipper').innerHTML === ''){
            document.querySelector('.add-shipper').insertAdjacentHTML('beforeend', markup);
        }                 
                            
});


                            
                            
                            
                            
