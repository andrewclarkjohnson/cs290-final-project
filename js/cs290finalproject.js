
  $( document ).ready(function() {
 
   
 
////////////////////////
// get current page

$(window).load (function()
{
  $( "body" ).scrollTop( 10 );
  // $("#my-leaderboard").removeClass('hide');
});
// window.onload = function  () 
// {
	if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+ ...
		    xmlhttp = new XMLHttpRequest();
		} else if (window.ActiveXObject) { // IE 6 and older
		    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

/////////////////////////////////////////////////////////////////

$("#topnav-intro-button").click(function(){
    $("#main-intro").removeClass("hide");
    $("#main-content-top").removeClass("hide");
    $("#main-content").removeClass("hide");
    $("#main-login-container").addClass("hide");
    $("#main-quiz-container").addClass("hide");
    $("#top-panel-container").addClass("hide");
    $("#bottom-content").addClass("hide");
    
    $( "body" ).scrollTop( 10 );
});

/////////////////////////////////////////////////////////////////

	// document.getElementById("login-button").onclick = function() {
    // $("#page-container").on("click","#topnav-login-button", function(){ 
$("#page-container").on("click","#topnav-login-button, .log-in-link", function(){ 

  $("#main-login-container").removeClass("hide");
  $("#login-area").removeClass("hide");
  $("#top-panel-container").addClass("hide");
  $("#create-account-area").addClass("hide");
  $("#main-intro").addClass("hide");
  $("#bottom-content").addClass("hide");
  $("#message").removeClass("hide");
  $("#main-content-top").removeClass("hide");
  // $("#message").text("");
  $( "body" ).scrollTop( 10 );


	});

/////////////////////////////////////////////////////////////////
/*  This site helped me a lot with the login functionality
http://tutsforweb.blogspot.jp/2012/05/ajax-login-form-with-jquery-and-php.html 
*/

$(".navbar-fixed-top").on("click","#topnav-logout-button", function(){ 
 // $("#topnav-logout-button").click(function(){
    $.ajax({
       type: "POST",
       url: "log_functions.php?action=logout",
    success: function(html){
    // console.log("hello");
    console.log($.trim(html));
    if($.trim(html)=='loggedout')
    {
     // $("#topnav-logged-out-container").removeClass("hide");
     // $("#topnav-logged-in-container").addClass("hide");

     $("#topnav-logout-button").addClass("hide");
     $("#topnav-add-new-button").addClass("hide");
     $("#topnav-quiz-button").addClass("hide");
     $("#topnav-login-button").removeClass("hide");
     $("#topnav-create-account-button").removeClass("hide");
     $("#main-login-area").removeClass("hide");
     $("#message").removeClass("hide");
     $("#top-panel-container").removeClass("hide");
     $("#main-content").removeClass("hide");
     $("#main-content-top").removeClass("hide");
     // $("#main-intro").addClass("hide");
     $("#main-quiz-container").addClass("hide");
     $("#bottom-content").addClass("hide");
      $("#my-leaderboard").parent().addClass("hide");
      $(".navbar-brand").html("Classic Rock Album Track Challenge");
      // $('html, body').animate({ scrollTop: 0 }, 'slow');
    // $('html, body' ).text( "scrollTop:" + p.scrollTop() );
    $( "body" ).scrollTop( 10 );
// Disable the default behaviour when a user clicks an empty anchor link.
 // (The page jumps to the top instead of // animating)
$(".logged-out-intro-message").removeClass("hide");
$(".logged-in-intro-message").addClass("hide");
$("#main-intro").removeClass("hide");
    // $("#main-intro").addClass("hide");
    $("#message").html("<p><span class='alert alert-success' role='alert'>You've successfully logged out. </span></p>");
    $("#add-tracks-area").addClass("hide");
    }
    
    
   }
  });
  return false;
 });






/////////////////////////////////////////////////////////////////

$("#main-login-container").on("click","#submit-login", function(){ 
 // $("#").click(function(){
  console.log ("hello");
  username=$("#enter_username").val();
  password=$("#enter_password").val();
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=check_login",
   data: "name="+username+"&pass="+password,
   success: function(html){
    // console.log("hello");
    console.log($.trim(html));
    
    if($.trim(html)=='username_not_found')
    {
      $("#top-panel-container").removeClass('hide');
     $("#message").html("<p><span class='alert alert-danger' role='alert'>We can't find your username. Did you type it correctly? Or do you need to <span class='create-account-link'>create an account</span>?</span></p>");
    }
    else 
      {
        if($.trim(html)=='wrong_password')
    {

      $("#top-panel-container").removeClass('hide');
     $("#message").html("<p><span class='alert alert-danger' role='alert'>D'oh. The password you entered didn't match what we have for you. </span></p>");
    }
    else
    {
     $("#top-panel-container").removeClass('hide');
     $("#topnav-logout-button").removeClass("hide");
     $("#topnav-add-new-button").removeClass("hide");
     $("#topnav-quiz-button").removeClass("hide");
     $("#topnav-login-button").addClass("hide");
     $("#topnav-create-account-button").addClass("hide");
     $("#main-login-container").addClass("hide");
     $("#main-quiz-container").addClass("hide");
     $("#message").removeClass("hide");
     $("#message").html("<p><span class='alert alert-success' role='alert'>Excellent. You are now logged in.</span></p>");
$(".logged-out-intro-message").addClass("hide");
$(".logged-in-intro-message").removeClass("hide");
     // $("#main-quiz-container").removeClass("hide");
    $("#main-intro").removeClass("hide");
     $("#my-leaderboard").parent().removeClass("hide");
     // $("#my-leaderboard").removeClass("hide");
      $("#my-leaderboard").html(html);
     

    }
    }
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });



////////////////////////
//  $("#topnav-create-account-button").click(function(){
//     // var div_to_hide document.getElementById("intro");
//     // div_to_hide.classList.add = "hide";

//     // document.getElementById("intro").classList.add ("hide");
//     // document.getElementById("login-container").classList.remove ("hide");
//   $("#main-login-container").removeClass("hide");
//   $("#message").removeClass("hide");
//   $("#create-account-area").removeClass("hide");
// $("#login-area").addClass("hide");
// $("#main-intro").addClass("hide");

//   });


////////////////////////
$("#page-container").on("click",".create-account-link, #topnav-create-account-button ", function(){ 
 // $("#message .alert .create-account-link").click(function(){
    // var div_to_hide document.getElementById("intro");
    // div_to_hide.classList.add = "hide";

    // document.getElementById("intro").classList.add ("hide");
    // document.getElementById("login-container").classList.remove ("hide");
  $("#main-login-container").removeClass("hide");
  $("#message").addClass("hide");
  $("#create-account-area").removeClass("hide");
$("#login-area").addClass("hide");
$("#top-panel-container").addClass("hide");
$("#main-intro").addClass("hide");
$("#message .alert").addClass("hide");
// $("#create-account-area .alert").removeClass("hide");

  });


/////////////////////////////////////////////////////////////////
$("#create-account-area").on("click","#submit-account", function(){ 
 // $("#submit-account").click(function(){
  console.log ("hello");
  username=$("#create_username").val();
  password=$("#create_password").val();
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=create_account",
   data: "name="+username+"&pass="+password,
   success: function(html){
    // console.log("hello");
    console.log($.trim(html));
    $("#message").removeClass("hide");
    $("#top-panel-container").removeClass("hide");
    if($.trim(html)=='username_taken')
    {

     $("#message").html("<span class='alert alert-danger' role='alert'>Looks like someone already has that username. Try another one.</span>");
    }
    else
    {
      if($.trim(html)=='too_short')
      {

       $("#message").html("<span class='alert alert-danger' role='alert'>D'oh. Your username and/or password should be between 3 and 15 characters. </span>");
      }
      else 
      {
        if($.trim(html)=='non_alphanumeric')
        {

         $("#message").html("<span class='alert alert-danger' role='alert'>D'oh. Your username and/or password contain non-alphanumeric characters. </span> ");
        }
        else
        {
           
           $("#topnav-logged-in").addClass("hide");
           $("#topnav-login-button").addClass("hide");
           $("#topnav-logout-button").removeClass("hide");
           $("#topnav-create-account-button").addClass("hide");
           // $("#create-account-button").addClass("hide");
           $("#create-account-area").addClass("hide");
           $("#main-intro").removeClass("hide");
           $("#logged-in-intro-message").removeClass("hide");
           $("#logged-out-intro-message").addClass("hide");
           $("#top-panel-container").addClass("hide");
           $("#logout-button").removeClass("hide");
           $("#main-quiz-container").removeClass("hide");
            $("#my-leaderboard").parent().removeClass("hide");
           $("#topnav-logged-out").removeClass("hide");
           
           $("#topnav-quiz-button").removeClass("hide");
           $("#topnav-add-new-button").removeClass("hide");
           $("#my-leaderboard").html(html);
        }
      }
      
    }
    
    
    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });

////////////////////////



//*********************************************************************
///// what to do when user wants to add a new artist into the database



 $("#topnav-add-new-button").click(function(){

  // $("#top-panel-container").removeClass('hide');
 console.log ("dispaly artist list");
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=display_artist_list",
  
   success: function(html){
    console.log(html);
    $("#top-panel-container").removeClass('hide');
    $("#message").html(html);
  
     // $("#top-panel-container").addClass('hide');
  $("#main-content-top").addClass("hide");
  $("#bottom-content").removeClass("hide");
  $("#main-add-album-container").removeClass("hide");
  $("#main-intro").addClass("hide");
  $("#main-content").addClass("hide");
  $("#main-quiz-container").addClass("hide");

  $("#bottom-content").removeClass("hide");
$( "body" ).scrollTop( 10 );
  // $("#main-quiz").removeClass("hide");
  // $("#main-quiz-container").removeClass("hide");
  // $("#main-quiz-container").html(html);
   // $(".topnav-brand").html("Score: - / -");
    
  }
  ,
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });






////////////////////////

 $("#submit-artist").click(function(){
  console.log ("submit artist");
  // savePageInLocalStorage('add_artist');
  artist_name=$("#enter_artist_name").val();
  artist_alternative=$("#enter_artist_alternative").val();
  artist_image=$("#submit-artist").parent().children("#my-awesome-dropzone").children(".dz-preview").children(".dz-details").children(".dz-filename").children("span").text();
console.log (artist_name);
console.log (artist_image);
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=add_new_artist",
   data: "artist="+artist_name+"&alternative="+artist_alternative+"&image="+artist_image,
   success: function(html){
  
   console.log (html);
   
      if($.trim(html)=='artist_already_exists')
      {
        $( "body" ).scrollTop( 10 );
        $("#message").html("<span class='alert alert-danger' role='alert'>That artist already exists. Try another one or select it to add album tracks.</span>");
      }
      else
      {
        if($.trim(html)=='artist not supplied')
        {
          $( "body" ).scrollTop( 10 );
          $("#message").html("<span class='alert alert-danger' role='alert'>You need to supply the name of the artist in the artist field.</span>");
        }
        else
        {
          var code = html.split("|||");

           console.log("yeah");
           $("#message").html("<p><span class='alert alert-success' role='alert'>The artist was added successfully.</span></p>");
           $( "body" ).scrollTop( 10 );
           $("#message").append(code[0]);
           $("#add-tracks-area").append(code[1]);
           $("#main-content").removeClass('hide');
           $("#main-content-top").removeClass('hide');
           $("#main-quiz-container").addClass('hide');
           // $("#main-content-top").removeClass('hide');
        }
    }
    
    
    
    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });


/////////////////////////////////

//*********************************************************************
///// what to do when user wants to take a quiz

 $("#topnav-quiz-button").click(function(){

  // $("#top-panel-container").removeClass('hide');
 console.log ("generate quiz");
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=generate_quiz",
  
   success: function(html){
$("#top-panel-container").removeClass('hide');
$("#message").removeClass('hide');
$( "body" ).scrollTop( 10 );
    if (html=='not enough questions')
  {
    $("#message").html("<p><span class='alert alert-warning' role='alert'>D'oh. We don't have enough data yet to generate a quiz! Feel free to add some :) </span></p>");
  }
  else
  {
    $("#message").html("<p><span class='alert alert-success' role='alert'>Are you ready? Choose the albums that the 10 tracks below come from! </span></p>");

     // $("#top-panel-container").addClass('hide');
  $("#main-add-album-container").addClass("hide");
  $("#main-intro").addClass("hide");
  $("#add-tracks-area").addClass("hide");
  $("#bottom-content").addClass("hide");
  $("#main-content").removeClass("hide");
  $("#main-content-top").removeClass("hide");
  $("#main-quiz-container").removeClass("hide");
  $("#main-quiz-container").html(html);
   $(".topnav-brand").html("Score: - / -");
    
   }
  }
  ,
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });



//////////////////////////////////////////////////////////////////////////////




$("#page-container").delegate("#choose_artist","change" , function(){ 
 // $("#choose_artist").change(function(){

 console.log ("choose artist");
  artist_id=$(this).val();
  // artist_name = $("#choose_artist2").find(":selected").text();
  console.log ("art id:::::"+artist_id + "  ");
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=add_new_album",
   data: "artist_id="+artist_id,
   success: function(html){
    // console.log("hello");
   $("#add-album").removeClass("hide");
   $("#add-artist").removeClass("hide");
   $("#main-content-top").removeClass("hide");
   $("#main-content").removeClass("hide");
   $("#add-artist").val(artist_id);
    // $("#add-album-intro").addClass("hide");
    $("#add-tracks-area").html(html);
    $("#bottom-content").removeClass('hide');
    $("#add-tracks-area").removeClass('hide');
    
    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });


//////////////////////////////////////////////////////////////////////////////



$("#main-content").on("click","#add-new-album", function(){ 

// $("#add-new-album").click(function(){

console.log ("submit album");

  artist_id=$("#artist_id").val();
  album_name=$("#enter_new_album").val();
  album_year=$("#enter_album_year").val();
 

  console.log(album_name);
  console.log(artist_id);
  console.log(album_year);
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=add_new_album_to_database",
   data: "artist_id="+artist_id+
          "&album_name="+album_name+
          "&album_year="+album_year,
   success: function(html){
    // console.log("hello");
    if (html == 'invalid date')
    {
      $("#add-tracks-area").prepend("<p><span class='alert alert-warning' role='alert'>"+album_name+" was <strong>NOT</strong> added. <br>Please add a valid year between 1950 and 2015.</span></p>");
  $( "body" ).scrollTop( 10 );
    }
    else
      if (html == 'empty title'){
        $("#add-tracks-area").prepend("<p><span class='alert alert-warning' role='alert'>You need to add a title.</span></p>");
        $( "body" ).scrollTop( 10 );
      }
      else
    {
      $("#add-tracks-area").html(html);
      $("#add-tracks-area").prepend("<p><span class='alert alert-success' role='alert'>"+album_name+" was successfully added</span></p>");
   
    $( "body" ).scrollTop( 10 );
    }
    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });


//////////////////////////////////////////////////////////////////////////////




// show the list of tracks for an album
// add_tracks_container
// $("#main-add-album-container").on("click","div[id^='album']", function(){ 
  $("#main-content").on("click",".album_name", function(){ 

// $("#add-new-album").click(function(){


console.log ("album button clicked");
  album_id=$(this).attr('value');
   var album_index = $( ".album_name" ).index( this );
   // var index = $( "div[id^='album']" ).index( this );
  // console.log( "That was div index #" + index );
  // var flip = 0;
  console.log("album id: " + album_id);
  console.log("album index : " + album_index);

  var add_track_space_text = $(".album_name:eq("+album_index+")").siblings(".add_track_space").html();
  console.log(add_track_space_text);
  if (add_track_space_text == "")
  {
    $.ajax({
   type: "POST",
   url: "log_functions.php?action=add_tracks",
   data: "album_id="+album_id,
   success: function(html){

   $(".add_track_space:eq("+album_index+")").html(html);


   $(".add_tracks_container:eq("+album_index+")").removeClass('hide',3000,'swing');
    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });

  }
  else
  {
    $(".album_name:eq("+album_index+")").siblings(".add_track_space").html("");
  }
  
  return false;
 });

// close track window





//////////////////////////////////////////////////////////////////////////////





/// when user clicks "add tracks" button to input album tracks

$("#main-content").on("click",".add-new-tracks", function(){ 

// $("#add-new-album").click(function(){
 album_id=$(this).attr('value');
 // artist_id=$(this).parent().parent().attr('value');
 artist_id=$(this).parent().find('input:hidden[name=artist_id]').attr('value');

   // var album_index = $( ".album_name" ).index( this );

console.log ("add tracks button clicked");
var album_index = $(this).parent().parent().parent().attr('value');
  // var index = $( ".add-new-tracks" ).index( this );
  // var album_index= $( ".update-track-in-database:eq("+index+")" ).parent().parent().index();
  console.log ("album index: "+album_index );
  console.log ("album id: "+album_id );
  console.log ("artist id: "+artist_id );
    // album_id=$(".tracks_album_id").attr('value');
    album_id=$(this).attr('value');
   track1=$("#album"+album_id+"-"+1).val();
   track2=$("#album"+album_id+"-"+2).val();
   track3=$("#album"+album_id+"-"+3).val();
   track4=$("#album"+album_id+"-"+4).val();
   track5=$("#album"+album_id+"-"+5).val();
 
 

  console.log(track1);
  console.log(album_id);

  $.ajax({
   type: "POST",
   url: "log_functions.php?action=add_tracks_to_database",
   data: "artist_id="+artist_id+"&album_id="+album_id+
          "&track1="+track1+
          "&track2="+track2+
          "&track3="+track3+
          "&track4="+track4+
          "&track5="+track5 ,
   success: function(html){
    // console.log("hello");
    // $("#message").text("Tracks added");
    var code = html.split("|||");
$(".add_track_space:eq("+album_index+")").html(code[0]);
$(".album_name:eq("+album_index+")").html(code[1]);
    console.log (code[1]);

    
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });


//////////////////////////////////////////////////////////////////////////////




// when user click on the edit pencil
$("#main-content").on("click",".glyphicon-pencil", function(){ 

console.log ("edit button clicked");
  var index = $( ".glyphicon-pencil" ).index( this );
  var track_listing_number = index +1;
  track_name=$(this).attr('value');
  // track_id=$(this).parents(".track_listing").attr('value');
  track_id=$(".glyphicon-pencil:eq("+index+")").parents(".track_listing").attr('value');
   
// var track_name = $( ".update_track_id:eq("+index+")" ).attr('value');
  console.log("*track id: "+track_id);
  console.log("*track name: "+track_name);
  console.log("*track_listing_number: "+track_listing_number);

  $.ajax({
   type: "POST",
   url: "log_functions.php?action=update_track",
   data: "track_id="+track_id
   +"&track_name="+track_name
   +"&track_listing_number="+track_listing_number,
   success: function(html){
    // console.log("hello");
    $(".track_listing:eq("+index+")").addClass('active');
    $(".track_listing:eq("+index+")").html(html);

   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });

//////////////////////////////////////////////////////////////////////////////




//when user updates a track
$("#main-content").on("click",".update-track-in-database", function(){ 

  console.log ("update track in database");

  track_id=$(this).attr('value');
  var index = $(this).parent().index();
  var album_index = $(".update-track-in-database:eq("+index+")").parents(".album_name_container").attr('value');
  track_name = $(this).parent().children(".update_track_id").val();

  console.log("update button index: "+index);
  console.log("album index:" + album_index);
  console.log("track id: " + track_id);
  console.log("trackname: "+track_name);
  // console.log(dcf);

  $.ajax({
   type: "POST",
   url: "log_functions.php?action=update_track_in_database",
   data: "track_id="+track_id+
   "&track_name="+track_name,
   success: function(html){
    console.log(html);
    console.log("post index "+ index);
    console.log("post album index "+ album_index);
    $(".active:eq("+index+")").removeClass('active');

    $(".add_track_space:eq("+album_index+")").html(html);

   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });


//////////////////////////////////////////////////////////////////////////////




//when user checks quiz question
$("#main-content").on("click",".submit-quiz-question", function(){ 

  console.log ("check quiz question");
  question_num=$(this).parent().parent().attr('value');
  // question_num=
 
    user_answer=$(this).parent().siblings(".question_album_choices").children(".form-control").val();
  correct_answer=$(this).parent().attr('value');


  console.log("question_num: "+question_num);
  console.log("user_answer:" + user_answer);
  console.log("correct_answer:" + correct_answer);
  
  $.ajax({
   type: "POST",
   url: "log_functions.php?action=check_answer",
   data: "user_answer="+user_answer+
   "&correct_answer="+correct_answer+
   "&question_num="+question_num,
   success: function(html){
    console.log(html);
    var code = html.split("|||");
        $(".results_container:eq("+question_num+")").html(code[0]);
       if(correct_answer == user_answer)
       {
        $(".results_container:eq("+question_num+")").siblings(".question_album_choices").children(".form-control").addClass("correct");
       }
       else
       {
         $(".results_container:eq("+question_num+")").siblings(".question_album_choices").children(".form-control").addClass("incorrect");
       }

       score = $(".results_container:eq("+question_num+") .current_score").attr('value');
       qs_attempted = $(".results_container:eq("+question_num+") .qs_attempted").attr('value');
       score_display = "Score: "+score+" / "+qs_attempted;
       $(".navbar-brand").html(score_display);
       $(".navbar-brand").addClass('score-display');
        $(".results_container:eq("+question_num+")").siblings(".question_album_choices").children(".form-control").attr("disabled","disabled");
        
        if (qs_attempted == 10) 
        {
          $( "body" ).scrollTop( 10 );
          
          console.log(code[0]);
          $("#my-leaderboard").html(code[1]);
          $("#alltime-leaderboad").html(code[2]);
          $("#recent-leaderboad").html(code[3]);
          $(".navbar-brand").append(" <span class='strong'> --SCORE SAVED--</span>");
          if(score==10)
          {
            $("#message").html(" <span class='alert alert-success' role='alert'>AWESOME - You really know your classic rock!</span>");
          }
          else 
          {
            if(score>7)
            {
              $("#message").html(" <span class='alert alert-success' role='alert'>Excellent - Not too shabby!</span>");
            }
            else
            {
              if (score >4)
              {
                 $("#message").html(" <span class='alert alert-info' role='alert'>Not bad - You've had some exposure</span>");
              }
              else
              {
                 $("#message").html(" <span class='alert alert-warning' role='alert'>Meh - Classic rock isn't your thing, eh?</span>");
              }
            }
          }
        }
 
   },
   beforeSend:function()
   {
    $("#add_err").html("Loading...");
   }
  });
  return false;
 });





});

