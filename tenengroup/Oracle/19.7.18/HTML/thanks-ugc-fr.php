<rn:meta title="#rn:msg:QUESTION_SUBMITTED_LBL#" template="standard.php" clickstream="incident_confirm"/>
<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />

<script type="text/javascript">
  function addCss() {
    var head = document.getElementsByTagName('head')[0], link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = '/euf/assets/themes/standard/ugc-thanks.css';
    head.appendChild(link);
    return link;
  }
  addCss();
</script>

<span id="top"></span>
<div class="rn_PageContent rn_AskQuestion rn_Container thank-you-confirm-wrapper">
  <div class="ugc-thanks-ttl">
    Merci de partager ! <span>Vous êtes magnifique !</span>
  </div>
  <div class="ugc-thanks-teaser">
    L’heureux gagnant sera informé le 21 août
  </div>
  <div class="ugc-thanks-btn-wrap">
    <hr class="ugc-thanks-hr" />
    <a class="ugc-thanks-btn" href="/app/ugc-fr">
      Téléchargez une autre photo
    </a>
  </div>

<rn:condition logged_in="true">
</rn:condition>
</div>
