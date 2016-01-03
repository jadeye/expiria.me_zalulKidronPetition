<?php
/*
 * Template Name: custom page tempalte
 * Description: Expiria demo. 
 */
get_header(); ?>
<title>צלול - עצומת נחל קדרון</title>
<div class="container">
  <div class="headLogo"></div>
  <div class="row head">
    <div class="col-xs-12">
      <div class="title">על חומותייך עיר דוד,<span class="red"> הזרמתי ת'שפכים</span></div>
      <div class="subtitle">מפסיקים את הזרמת הביוב לנחל הקדרון</div>
    </div>
  </div>
  <section>
   <div class="row jumbotron register">
    <div class="col-xs-12 pull-right col-sm-7">
      <div class="registerRight">
        <p class="text-justify">עיריית ירושלים מזרימה לנחל קדרון, הזורם
          מירושלים לים המלח, 11 מיליון מ"ק שפכים בשנה,
          כשליש מכמות השפכים המיוצרת על ידה.</p>
          <p class="text-justify">ירושלים והעומד בראשה, ניר ברקת, עוברים על
            חוקי המדינה האוסרים על זיהום נחלים ועל החוק
            הבינלאומי, האוסר זיהום נחל חוצה גבולות.</p>
            <p class="row">&nbsp;</p><br />
            <p class="text-justify-bold">הצטרפו אל צלול בדרישה לטפל בשפכים
              ולהפסיק את זיהום הנחל.</p>
              <p class="row">&nbsp;</p><br />
              <p class="text-justify-bold">לא ניתן לשאת מצב שבו בירת ישראל, העיר בה שוכן בית המחוקקים, "מצפצפת" על חוקי המדינה ומזהמת את הסביבה.</p>
            </div>
          </div>
          <div class="col-xs-12 pull-left col-sm-5">
            <div class="registerLeft">
              <form id="regForm" action="signform.php" method="post" accept-charset="UTF-8">
                <input id="fullname" type="text" placeholder="שם מלא" required />
                <input id="email" type="email" placeholder="אימייל" data-parsley-trigger="change" required />
                <input id="phone" data-parsley-type="integer" placeholder="טלפון" data-parsley-length="[9, 12]" data-parsley-trigger="change" required />
                <input class="sendBtn" type="submit" id="sendBtn" name="sendBtn" value="לחתימה >>"/>
                <br />
                <input type="checkbox" id="checkme" />
                <label for="checkme">אני מסכימ/ה<br/> לקבל דיוור מעמותת צלול</label>
                <p id="sent-form-msg" class="success">תודה שחתמתם על העצומה</p>
              </form>
              <script type="text/javascript">
                jQuery("#regForm").parsley();
              </script>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer bottom">
        <div class="bottomRight">
          <a target="_blank" href="http://www.zalul.org.il/?p=8465">לפרטים נוספים >></a>
        </div>
        <div class="bottomLeft">
          <a target="_blank" href="https://www.facebook.com/ZalulIsrael">הצטרפו עוד היום לעמוד הפייסבוק של עמותת צלול</a>
        </div>
      </footer>
    </div> <!-- /container -->
  </main>
</div>