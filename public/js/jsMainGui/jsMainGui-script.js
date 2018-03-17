var btn_actionEvents = new ClassMain();
var inputElements = null;
var v_JSON_inputElements = null;
var inputElements = [];
var selectorInput = "input[type='text'],input[type='password'],input[type='email'],input[type='number'],input[type='search'],input[type='date'],textarea";

$(document).ready(function() {

  btn_actionEvents.iniSetup();








});

function ClassMain() {

  this.iniSetup = function() {
    btn_actionEvents.inputMaterialize();
    $("form[name=formHTML] " + selectorInput).each(function(indx, element) {
      var id = $(element).attr('id');
      inputElements[indx] = id;
    });


    $("form[name=formHTML] input[type=checkbox]").each(function(indx, element) {
      btn_actionEvents.inputBoxMaterialize(element.id);
    });
    $.each(inputElements, function(indx, element) {
      btn_actionEvents.validityInputEmptyOrFull(element);
    });
    $("div[id=content-noticias]").hide();
    $("div[id=content-about]").hide();
    $('a[href*=#]').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname) {

        var $target = $(this.hash);

        $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

        if ($target.length) {

          var targetOffset = $target.offset().top;

          $('html,body').animate({
            scrollTop: targetOffset
          }, 400);

          return false;

        }

      }

    });


    $("#start-noticias").click(function() {
      btn_actionEvents.showNewTopics();
    });

    $("#start-about").click(function() {
      btn_actionEvents.showAbout();
    });

    $("#v_frmCrtUs_typeusers").change(function() {
      btn_actionEvents.showFormAssistan();
    });
    if ($("#v_frmCrtUs_typeusers").val() == "1") {
      $("#form-user-sistem").show();
      $("#form-user-beneficier").hide();
      $("#form-user-profesor").hide();
    }

    $("#v_frmUserToolts_type_user_assistan").click(function() {
      $("#formAssistanSistem").show();
      $("#formUsersNormals").hide();
    });
    $("#v_frmUserToolts_type_user_normal").click(function() {
      $("#formAssistanSistem").hide();
      $("#formUsersNormals").show();

    });

    $.each($("form[name=formHTML] div[id]"), function(i, k) {
      $("#frm_system_user_" + (i + 1)).css({
        'display': 'none'
      });
      $("#frm_beneficier_" + (i + 1)).css({
        'display': 'none'
      });
    });



    if ($("#v_frmUserToolts_type_user_assistan").is(':checked')) {
      $("#formUsersNormals").hide();
    }

    $("button[type=reset]").click(function() {
      var selectName;
      $.each($("form[name='formHTML'] select"), function(indx, elements) {
        selectName = $(elements).attr('name');
        $(selectName).val(1).change();
        $.each($('form[name=formHTML] div'), function(indx, elements) {
          if ((selectName) == $(elements).attr('id')) {
            //console.log(elements);

            $("#" + $(elements).attr('id')).html('<div class="select_Content_Title"><span data-value="' + '">Seleccione una opción</span></div><div class="select_Icon select_icon_circle select_icon-dm-1"><img src="' + location.protocol + '//' + location.host + '/img/icon/form/arrowHover.png" class="select_icon" id="select_arrow' + $(elements).attr('id') + '"></div>');
            $("#select_arrow" + $(elements).attr('id')).css({
              'transform': 'rotate(180deg)'
            });
          }

        });
      });
      var formHTML = $("form[name=formHTML] label[id]");
      $(formHTML).each(function(indx, element) {

        $("#" + element.id).removeClass('active');
      });
      $("#frm_system_user_1").hide('fast');
      $("#frm_system_user_2").hide('fast');
      $("#frm_system_user_3").hide('fast');
      $("#frm_system_user_4").hide('fast');
      $("#frm_system_user_5").hide('fast');
      $("#frm_beneficier_1").hide('slow');
      $("#frm_beneficier_2").hide('slow');
      $("#frm_beneficier_3").hide('slow');
      $("#frm_beneficier_4").hide('slow');
      $("#frm_beneficier_5").hide('slow');
    });

  }
  this.showNewTopics = function() {
    console.log('algo');
    if ($("#content-noticias").css('display') == 'none') {
      $("#content-noticias").fadeIn('slow');
      $('#start-noticias').css({
        'transform': 'rotate(0deg)',
        'transition': 'transform 1s'
      });
    } else {
      $("#content-noticias").hide();
      $('#start-noticias').css({
        'transform': 'rotate(180deg)',
        'transition': 'transform 1s'
      });
    }
  }
  this.showAbout = function() {
    console.log('algo');
    if ($("#content-about").css('display') == 'none') {
      $("#content-about").fadeIn('slow');
      $('#start-about').css({
        'transform': 'rotate(0deg)',
        'transition': 'transform 1s'
      });
    } else {
      $("#content-about").hide();
      $('#start-about').css({
        'transform': 'rotate(180deg)',
        'transition': 'transform 1s'
      });
    }
  }

  this.validityInputEmptyOrFull = function(id) {
    $("form[name='formHTML'] label").each(function(i, k) {
      if (($('#' + id).val() != '') || ($('#' + id).attr('placeholder') !== undefined)) {
        if ($('#' + id).attr('disabled') == "disabled") {
          if (($('#' + id).attr('id') === $(k).attr('for'))) {
            $(k).addClass('disabled');
          }
        } else {
          if (($('#' + id).attr('id') === $(k).attr('for'))) {
            $(k).addClass('active');
          }
        }
      } else if ($('#' + id).attr('id') === $(k).attr('for')) {
        $(k).removeClass('active');
        $(k).removeClass('desabled');
      }
    });
  }
  this.inputBoxMaterialize = function(id) {
    $("#" + id).click(function() {
      if ($('#' + id).is(':checked')) {
        if ($("#" + id + "_title").text() == 'Off') {
          $("#" + id + "_title").html('On');
        }

      } else {
        if ($("#" + id + "_title").text() != 'Off') {
          $("#" + id + "_title").html('Off');
        }
      }

    });
  }
  this.inputMaterialize = function() {
    $("form[name='formHTML'] label").each(function(i, k) {
      $(selectorInput).focus(function() {
        var inputSelector = $(this);

        var label = $(k);
        if (inputSelector.attr('id') === $(label).attr('for')) {
          $(label).addClass('active');
        }
      });
      $(selectorInput).focusout(function() {
        var inputSelector = $(this);
        var label = $(k);

        if ((inputSelector.val() != '') || (inputSelector.attr('placeholder') !== undefined)) {
          if ((inputSelector.attr('id') === $(label).attr('for'))) {
            $(label).addClass('active');
          }

        } else if (inputSelector.attr('id') === $(label).attr('for')) {
          $(label).removeClass('active');
        }

      });
    });
  }
}
