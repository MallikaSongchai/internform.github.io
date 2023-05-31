<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>
    <div class="main-wrapper">
        <div class="form-wrapper">
            <div>
                <h1>Internship Form</h1>
            </div>
          <form action="insertdata.php" method="POST" enctype="multipart/form-data">

            <div class="input-flex">
              <div>
                <label for="firstname" class="form-label"> First Name </label>
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  placeholder="Your first name"
                  class="form-input"
                />
              </div>
      
              <div>
                <label for="lastname" class="form-label"> Last Name </label>
                <input
                  type="text"
                  name="lastname"
                  id="lastname"
                  placeholder="Your last name"
                  class="form-input"
                />
              </div>
            </div>
      
            <div class="input-flex">
              <div>
                  <label for="age" class="form-label"> Age </label>
                  <input
                  type="text"
                  name="age"
                  id="age"
                  class="form-input"
                  />
              </div>
      
              <div>
                  <label for="gender" class="form-label">Gender</label>
                  <input type="text" 
                  name="gender" 
                  id="gender"
                  class="form-input"/>
              </div>
            </div>

                  
                  <div class="mb-3">
                    <label for="position" class="form-label"> Applying for Position: </label>
                    <input
                    type="text"
                    name="position"
                    id="position"
                    class="form-input"
                    />
                  </div>  

                  <div class="mb-3">
                    <div>
                        <label for="starts" class="form-label"> When can you start? </label>
                        <input 
                        type="date" 
                        name="starts" 
                        id="starts" 
                        class="form-input" />
                    </div>

                    <div>
                        <label for="finish" class="form-label"> When finish your internship? </label>
                    <input 
                    type="date" 
                    name="finish" 
                    id="finish" 
                    class="form-input" />
                    </div>
                  </div>

                  <div class="mb-3">
                    <div>
                        <label for="university" class="form-label"> University: </label>
                        <input
                          type="text"
                          name="university"
                          id="university"
                          class="form-input"
                        />
                    </div>
                  </div>

                  <div class="mb-3">
                    <div>
                        <label for="major" class="form-label"> Major: </label>
                        <input
                          type="text"
                          name="major"
                          id="major"
                          class="form-input"
                        />
                    </div>
                  </div>
            
                  <div class="mb-3">
                    <label for="phone" class="form-label"> Phone Number  </label>
                    <input
                      type="text"
                      name="phone"
                      id="phone"
                      placeholder="Your Phone number"
                      class="form-input mb-3"
                    />
                  </div>

                  <div class="mb-3">
                    <div><label for="email" class="form-label"> Email </label>
                        <input
                          type="text"
                          name="email"
                          id="email"
                          placeholder="example@email.com"
                          class="form-input mb-3"
                        />
                    </div>
                  </div>

                  <div class="form-file-flex">
                    <label for="file" class="form-label">
                      Upload Resume
                    </label>
                    <input
                      type="file"
                      name="file"
                      id="file"
                      class="form-file"
                    />
                  </div>
                  

                  <button class="btn"  name='submit' type="submit">Apply Now</button>
                  <button class="btn"  name='submit' type="submit">Reset</button>
                </form>
              </div>
            </div>
      </body>
      </html>