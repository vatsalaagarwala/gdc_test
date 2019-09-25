var v = $("#booking-form").validate({
      rules: {
        bf_totalGuests: {
          required: true
        },
        bf_date: {
          required: true
        },
        bf_time: {
          required: true
        },
        bf_hours: {
          required: true
        },
        bf_fullname: {
          required: true
        },
        bf_email: {
          required: true,
          email: true
        }
 
      },
      errorElement: "span",
      errorClass: "error",
      errorPlacement: function(error, element) {
            error.insertBefore(element); 
      }
});

// $(".next-btn1").click(function() {
//     if (v.form()) {
//       $(".tab-pane").hide();
//       $("#step2").fadeIn(1000);
//       $('.progressbar-dots').removeClass('active');
//       $('.progressbar-dots:nth-child(2)').addClass('active');
//     }
//  });

$(document).ready(function() {    
        $( "#region" ).change(function() {
            var selected_value = $("#region").val();

            if (selected_value == "Gums") {
              $("tab-pane").hide();
              $("#stepgum").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#part").change(function(){                  //gums upper lower
                      var symp = $("#part").val();

                      if (symp == "Upper") {
                        $("tab-pane").hide();
                        $("#stepgumsymptom").fadeIn(1000);
                        $('.progressbar-dots').removeClass('active');
                        $('.progressbar-dots:nth-child(3)').addClass('active');
                        $(document).ready(function(){
                          $("#symptom").change(function(){
                            var gumdur = $("#symptom").val();
                            if (gumdur == "Burning Sensation") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                              $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#bsltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bsmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Redness of Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#rgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#rgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Swelling Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#sgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#sgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Bleeding Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#bgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Pain") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Pus Discharge") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pdltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pdmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                          });
                        });
                      }//end of if for upper gum
                      if (symp == "Lower") {
                        $("tab-pane").hide();
                        $("#stepgumsymptom").fadeIn(1000);
                        $('.progressbar-dots').removeClass('active');
                        $('.progressbar-dots:nth-child(3)').addClass('active');
                        $(document).ready(function(){
                          $("#symptom").change(function(){
                            var gumdur = $("#symptom").val();
                            if (gumdur == "Burning Sensation") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                              $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#bsltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bsmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Redness of Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#rgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#rgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Swelling Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#sgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#sgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Bleeding Gums") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#bgltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bgmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Pain") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (gumdur == "Pus Discharge") {
                              $("tab-pane").hide();
                              $("#stepgumduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                               $(document).ready(function(){
                                $("#gumdur").change(function(){
                                  var res = $("#gumdur").val();
                                  if (res == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pdltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (res == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pdmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                          });
                        });
                      }// end of if for lower gum
                });
              });// gums uper lower close
            }//end if gums
            if(selected_value == "Teeth") {
              $("tab-pane").hide();
              $("#stepteeth").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#partTeeth").change(function(){
                  var selpart = $("#partTeeth").val();
                  if (selpart == "Upper") {
                        $("tab-pane").hide();
                        $("#stepteethsymptom").fadeIn(1000);
                        $('.progressbar-dots').removeClass('active');
                        $('.progressbar-dots:nth-child(3)').addClass('active');
                        $(document).ready(function(){
                          $("#symptomteeth").change(function(){
                            var act = $("#symptomteeth").val();
                            if (act == "Pain") {
                              $("tab-pane").hide();
                              $("#stepteethactivity").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#partTeethpain").change(function(){
                                  var ps = $("#partTeethpain").val();
                                  if (ps == "On Chewing") {
                                    $("tab-pane").hide();
                                    $("#stepteethdurationps").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(4)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethpsdur").change(function(){
                                        var res = $("#teethpsdur").val();
                                        if (res == "5 Seconds") {
                                          $("tab-pane").hide();
                                          $("#pc5").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                        if (res == "One Min") {
                                          $("tab-pane").hide();
                                          $("#p1m").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                        if (res == "On relieving chewing pressure") {
                                          $("tab-pane").hide();
                                          $("#p1m").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                  if (ps == "On Eating hot/cold") {
                                    $("tab-pane").hide();
                                    $("#stepteethtemp").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethstemp").click(function(){

                                        var temp = $("#teethstemp").val();

                                        if (temp == "Cold") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(4)').addClass('active');

                                        }
                                        if (temp == "Hot") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(4)').addClass('active');
                                        }
                                        if (temp == "None") {// ADD RESULT AND REMOVE
                                          $("tab-pane").hide();
                                          $("#none").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                });
                              });
                            }
                            if (act == "Sensitivity") {
                              $("tab-pane").hide();
                              $("#stepteethactivity").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#partTeethpain").change(function(){
                                  var ps = $("#partTeethpain").val();
                                  if (ps == "On Chewing") {
                                    $("tab-pane").hide();
                                    $("#stepteethdurationps").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                  }
                                  if (ps == "On Eating hot/cold") {
                                    $("tab-pane").hide();
                                    $("#stepteethtemp").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethstemp").change(function(){
                                        var temp = $("#teethstemp").val();

                                        if (temp == "Cold") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                        if (temp == "Hot") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                        if (temp == "None") {// ADD RESULT AND REMOVE
                                          $("tab-pane").hide();
                                          $("#stepteethtemp").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                });
                              });

                            }
                            if (act == "Food Lodgement") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    // $("#flltw").fadeIn(1000);
                                    $("#flltw").hide();
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    // $("#flmtw").fadeIn(1000);
                                    $("#flmtw").hide();
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Crowded Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ctltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ctmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Bad Ordour") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#boltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bomtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Plaque Deposits") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pdltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pdmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Difficulty in Biting/Chewing") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#dbltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#dbmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Yellow Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ytltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ytmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Stains on Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#stltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#stmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Missing Tooth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#mtltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#mtmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Loose Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ltltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ltmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                          });
                        });
                 }// end of if for upper teeth
                  if (selpart == "Lower") {
                        $("tab-pane").hide();
                        $("#stepteethsymptom").fadeIn(1000);
                        $('.progressbar-dots').removeClass('active');
                        $('.progressbar-dots:nth-child(3)').addClass('active');
                        $(document).ready(function(){
                          $("#symptomteeth").change(function(){
                            var act = $("#symptomteeth").val();
                            if (act == "Pain") {
                              $("tab-pane").hide();
                              $("#stepteethactivity").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#partTeethpain").change(function(){
                                  var ps = $("#partTeethpain").val();
                                  if (ps == "On Chewing") {
                                    $("tab-pane").hide();
                                    $("#stepteethdurationps").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(4)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethpsdur").change(function(){
                                        var res = $("#teethpsdur").val();
                                        if (res == "5 Seconds") {
                                          $("tab-pane").hide();
                                          $("#pc5").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                        if (res == "One Min") {
                                          $("tab-pane").hide();
                                          $("#p1m").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                        if (res == "On relieving chewing pressure") {
                                          $("tab-pane").hide();
                                          $("#p1m").fadeIn(1000);
                                          $("#info").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                  if (ps == "On Eating hot/cold") {
                                    $("tab-pane").hide();
                                    $("#stepteethtemp").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethstemp").click(function(){

                                        var temp = $("#teethstemp").val();

                                        if (temp == "Cold") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(4)').addClass('active');

                                        }
                                        if (temp == "Hot") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(4)').addClass('active');
                                        }
                                        if (temp == "None") {// ADD RESULT AND REMOVE
                                          $("tab-pane").hide();
                                          $("#none").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(5)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                });
                              });
                            }
                            if (act == "Sensitivity") {
                              $("tab-pane").hide();
                              $("#stepteethactivity").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#partTeethpain").change(function(){
                                  var ps = $("#partTeethpain").val();
                                  if (ps == "On Chewing") {
                                    $("tab-pane").hide();
                                    $("#stepteethdurationps").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                  }
                                  if (ps == "On Eating hot/cold") {
                                    $("tab-pane").hide();
                                    $("#stepteethtemp").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(3)').addClass('active');
                                    $(document).ready(function(){
                                      $("#teethstemp").change(function(){
                                        var temp = $("#teethstemp").val();

                                        if (temp == "Cold") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                        if (temp == "Hot") {
                                          $("tab-pane").hide();
                                          $("#stepteethtempdur").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                        if (temp == "None") {// ADD RESULT AND REMOVE
                                          $("tab-pane").hide();
                                          $("#stepteethtemp").fadeIn(1000);
                                          $('.progressbar-dots').removeClass('active');
                                          $('.progressbar-dots:nth-child(3)').addClass('active');
                                        }
                                      });
                                    });
                                  }
                                });
                              });

                            }
                            if (act == "Food Lodgement") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(4)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    // $("#flltw").fadeIn(1000);
                                    $("#flltw").hide();
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    // $("#flmtw").fadeIn(1000);
                                    $("#flmtw").hide();
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Crowded Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ctltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ctmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Bad Ordour") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#boltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#bomtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Plaque Deposits") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#pdltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#pdmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Difficulty in Biting/Chewing") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#dbltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#dbmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Yellow Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ytltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ytmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Stains on Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#stltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#stmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Missing Tooth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#mtltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#mtmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                            if (act == "Loose Teeth") {
                              $("tab-pane").hide();
                              $("#stepteethduration").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(3)').addClass('active');
                              $(document).ready(function(){
                                $("#teethdur").change(function(){
                                  var flres = $("#teethdur").val();
                                  if (flres == "Less than a week") {
                                    $("tab-pane").hide();
                                    $("#ltltw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                  if (flres == "More than a week") {
                                    $("tab-pane").hide();
                                    $("#ltmtw").fadeIn(1000);
                                    $("#info").fadeIn(1000);
                                    $('.progressbar-dots').removeClass('active');
                                    $('.progressbar-dots:nth-child(5)').addClass('active');
                                  }
                                });
                              });
                            }
                          });
                        });
                 }//end of if for lower
                });
              });
            }
            if (selected_value == "Tongue") {
              $("tab-pane").hide();
              $("#steptongue").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#partTongue").change(function(){
                  var pt = $("#partTongue").val();
                  if (pt == "Upper") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                  if (pt == "Lower") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                  if (pt == "Front") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                  if (pt == "Back") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                  if (pt == "Left") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                  if (pt == "Right") {
                    $("tab-pane").hide();
                    $("#steptonguesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#tonguesym").change(function(){
                        var ul = $("#tonguesym").val();
                        if (ul == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steptongueduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#tonguedur").change(function(){
                              var tres = $("#tonguedur").val();
                              if (tres == "Less than a week") {
                                $("tab-pane").hide();
                                $("#tlesstw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than a week") {
                                $("tab-pane").hide();
                                $("#tmtw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                               if (tres == "More than two weeks") {
                                $("tab-pane").hide();
                                $("#tmttw").fadeIn(1000);
                                $("#info").fadeIn(1000);
                                $('.progressbar-dots').removeClass('active');
                                $('.progressbar-dots:nth-child(5)').addClass('active');
                               }
                            });
                          });
                        }
                      });
                    });
                  }
                });
              });
            }
            if (selected_value == "Lips") {
              $("tab-pane").hide();
              $("#steplips").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#partlip").change(function(){
                  var lp = $("#partlip").val();
                  if (lp == "Outside") {
                    $("tab-pane").hide();
                    $("#steplipssym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#lipsym").change(function(){
                        var uls = $("#lipsym").val();
                        if (uls == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steplipduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready();
                          $("#lipdur").change(function(){
                            var lres = $("#lipdur").val();
                            if (lres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ulltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (lres == "More than a week") {
                              $("tab-pane").hide();
                              $("#umttw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                        }
                        if (uls == "Swelling") {
                          $("tab-pane").hide();
                          $("#steplipduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready();
                          $("#lipdur").change(function(){
                            var lres = $("#lipdur").val();
                            if (lres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#slltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (lres == "More than a week") {
                              $("tab-pane").hide();
                              $("#smttw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                        }
                      });
                    });
                  }
                  if (lp == "Inside") {
                    $("tab-pane").hide();
                    $("#steplipssym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#lipsym").change(function(){
                        var uls = $("#lipsym").val();
                        if (uls == "Ulcer/Injury") {
                          $("tab-pane").hide();
                          $("#steplipduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready();
                          $("#lipdur").change(function(){
                            var lres = $("#lipdur").val();
                            if (lres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ulltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (lres == "More than a week") {
                              $("tab-pane").hide();
                              $("#umttw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                        }
                        if (uls == "Swelling") {
                          $("tab-pane").hide();
                          $("#steplipduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready();
                          $("#lipdur").change(function(){
                            var lres = $("#lipdur").val();
                            if (lres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#slltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (lres == "More than a week") {
                              $("tab-pane").hide();
                              $("#smttw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                        }
                      });
                    });
                  }
                });
              });
            }
            if (selected_value == "Palate") {
              $("tab-pane").hide();
              $("#steppalate").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#partpalate").change(function(){
                  var pp = $("#partpalate").val();
                  if (pp == "Front") {
                    $("tab-pane").hide();
                    $("#steppalatesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#palatesym").change(function(){
                        var paldur = $("#palatesym").val();
                        if (paldur == "Ulcer") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#upaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#upamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });                      
                        }
                        if (paldur == "Injury") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ipaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ipamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Swelling") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#spaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#spamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Pain") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ppaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ppamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                      });
                    });
                  }
                  if (pp == "Back") {
                    $("tab-pane").hide();
                    $("#steppalatesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#palatesym").change(function(){
                        var paldur = $("#palatesym").val();
                        if (paldur == "Ulcer") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#upaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#upamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });                      
                        }
                        if (paldur == "Injury") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ipaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ipamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Swelling") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#spaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#spamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Pain") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ppaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ppamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                      });
                    });
                  }
                  if (pp == "Left") {
                    $("tab-pane").hide();
                    $("#steppalatesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#palatesym").change(function(){
                        var paldur = $("#palatesym").val();
                        if (paldur == "Ulcer") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#upaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#upamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });                      
                        }
                        if (paldur == "Injury") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ipaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ipamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Swelling") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#spaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#spamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Pain") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ppaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ppamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                      });
                    });
                  }
                  if (pp == "Right") {
                    $("tab-pane").hide();
                    $("#steppalatesym").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                      $("#palatesym").change(function(){
                        var paldur = $("#palatesym").val();
                        if (paldur == "Ulcer") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#upaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#upamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });                      
                        }
                        if (paldur == "Injury") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ipaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ipamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Swelling") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#spaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#spamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                        if (paldur == "Pain") {
                          $("tab-pane").hide();
                          $("#steppalateduration").fadeIn(1000);
                          $('.progressbar-dots').removeClass('active');
                          $('.progressbar-dots:nth-child(4)').addClass('active');
                          $(document).ready(function(){
                            $("#palatedur").change(function(){
                            var pres = $("#palatedur").val();
                            if (pres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#ppaltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (pres == "More than a week") {
                              $("tab-pane").hide();
                              $("#ppamtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                        }
                      });
                    });
                  }
                });
              });
            }
            
             if (selected_value == "Tonsils") {
              $("tab-pane").hide();
              $("#steptonsil").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(2)').addClass('active');
              $(document).ready(function(){
                $("#Symptom").change(function(){
                  var tondur = $("#Symptom").val();
                  if (tondur == "Redness") {
                    $("tab-pane").hide();
                    $("#steptonsilduration").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                            $("#tonsildur").change(function(){
                            var tres = $("#tonsildur").val();
                            if (tres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#trltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (tres == "More than a week") {
                              $("tab-pane").hide();
                              $("#trmtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                  }
                  if (tondur == "Swelling") {
                    $("tab-pane").hide();
                    $("#steptonsilduration").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                            $("#tonsildur").change(function(){
                            var tres = $("#tonsildur").val();
                            if (tres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#tsltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (tres == "More than a week") {
                              $("tab-pane").hide();
                              $("#tsmtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                  }
                  if (tondur == "Pain") {
                    $("tab-pane").hide();
                    $("#steptonsilduration").fadeIn(1000);
                    $('.progressbar-dots').removeClass('active');
                    $('.progressbar-dots:nth-child(3)').addClass('active');
                    $(document).ready(function(){
                            $("#tonsildur").change(function(){
                            var tres = $("#tonsildur").val();
                            if (tres == "Less than a week") {
                              $("tab-pane").hide();
                              $("#tpltw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                            if (tres == "More than a week") {
                              $("tab-pane").hide();
                              $("#tpmtw").fadeIn(1000);
                              $("#info").fadeIn(1000);
                              $('.progressbar-dots').removeClass('active');
                              $('.progressbar-dots:nth-child(5)').addClass('active');
                            }
                          });
                         });
                  }
                });
              });
           }
        });//close change function
});//close ready function

$(document).ready(function() {    
        $( "#Symptom" ).change(function() {
            var selected_value = $("Symptom").val();
            
             if (selected_value == "Redness") {
              $("tab-pane").hide();
              $("#step3").fadeIn(1000);
              $('.progressbar-dots').removeClass('active');
              $('.progressbar-dots:nth-child(3)').addClass('active');
           }
        });//close change function
});//close ready function







$(".next-btn2").click(function() {
    if (v.form()) {
      $(".tab-pane").hide();
      $("#step3").fadeIn(1000);
      $('.progressbar-dots').removeClass('active');
      $('.progressbar-dots:nth-child(3)').addClass('active');
    }
});
$(".next-btn3").click(function() {
    if (v.form()) {
      $(".tab-pane").hide();
      $("#step4").fadeIn(1000);
      $('.progressbar-dots').removeClass('active');
      $('.progressbar-dots:nth-child(3)').addClass('active');
    }
});

$(".submit-btn").click(function() {
  // if (v.form()) {
  //   $("#loader").show();
  //    setTimeout(function(){
  //      $("#booking-form").html("<h2>Your message was sent successfully. Thanks! We'll be in touch as soon as we can, which is usually like lightning (Unless we're sailing or eating tacos!).</h2>");
  //    }, 1000);
  //   return false;
  // }

  $("#flltw").fadeIn(1000);
  // $("#flmtw").fadeIn(1000);

});