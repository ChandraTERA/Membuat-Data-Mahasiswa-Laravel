<style>

* {
    margin: 0 auto;
    padding: 0 auto;
    box-sizing: border-box;
}

body {
    font-family: 'Nunito', sans-serif;
    background-color: #0d365a;
    color: #384047;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.contaier {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 20px;
}


    *, *:before, *:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

body {
font-family: 'Nunito', sans-serif;
color: #384047;
}

form {
max-width: 300px;
width: 100%;
margin: 10px auto;
padding: 20px;
background: #f4f7f8;
border-radius: 8px;
box-sizing: border-box;
box-shadow:  0px 0px 10px rgba('0, 0, 0, 0.1');
}

h1 {
margin: 0 0 30px 0;
text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
background: rgba(255,255,255,0.1);
border: none;
font-size: 16px;
height: auto;
margin: 0;
outline: 0;
padding: 15px;
width: 100%;
background-color: #e8eeef;
color: #8a97a0;
box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
margin: 0 4px 8px 0;
}

select {
padding: 6px;
height: 32px;
border-radius: 2px;
}

button {
padding: 19px 39px 18px 39px;
color: #FFF;
background-color: #4bc970;
font-size: 18px;
text-align: center;
font-style: normal;
border-radius: 5px;
width: 100%;
border: 1px solid #3ac162;
border-width: 1px 1px 3px;
box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
margin-bottom: 10px;
}

fieldset {
margin-bottom: 30px;
border: none;
}

legend {
font-size: 1.4em;
margin-bottom: 10px;
}

label {
display: block;
margin-bottom: 8px;
}

label.light {
font-weight: 300;
display: inline;
}

.number {
background-color: #5fcf80;
color: #fff;
height: 30px;
width: 30px;
display: inline-block;
font-size: 0.8em;
margin-right: 4px;
line-height: 30px;
text-align: center;
text-shadow: 0 1px 0 rgba(255,255,255,0.2);
border-radius: 100%;
}

@media screen and (min-width: 480px) {
form {
        max-width: 480px;
}
}
</style>


<div class="container"> 
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
              <label for="picture">Picture
                    <input class="form-control" type="file" name="picture" id="picture">
              </label>
        </div>
        <div class="form-group">
            <label for="username">Username
                  <input class="form-control" type="text" name="username" id="username" placeholder="Username">
            </label>
        </div>
        <div class="form-group">
            <label for="name">Name
                  <input class="form-control" type="text" name="name" id="name" placeholder="Name">
            </label>
        </div>
        <div class="form-group">
            <label for="privilege">Privilege
                  <input class="form-control" type="text" name="privilege" id="privilege" placeholder="Privilege">
            </label>
        </div>
        <div class="d-grid gap-2 max-auto">
            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i>&ensp;Simpan</button>
        </div>
  </form>
    </div>