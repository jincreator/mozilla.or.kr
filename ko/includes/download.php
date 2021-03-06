<?
// 다운로드 버튼 만들기 

function download_button_desktop($button, $fx_version, $style) {
?>
<aside id="download" class="download-button download-button-<?=$button?>">
    <noscript>
<div class="download download-dumb">
  <h4>Firefox 무료 다운로드- 한국어</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">Windows</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">Linux</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">Mac OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox 무료 다운로드- 한국어</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">Windows</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">Linux</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">Mac OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android</a></li>
   </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="os_windows">
      <a class="download-link download-firefox"
         href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko">
                  <span class="download-content">
        <?php
        if ($style == "channel") {
          echo('<span class="download-title">다운로드</span><span class="download-subtitle">윈도우용</span>');
        } else {
          echo('<span class="download-title">Firefox</span> 무료 다운로드');
        }
        ?>
        </span>
              </a>
    </li>
        <li class="os_linux">
      <a class="download-link download-firefox"
         href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko">
                  <span class="download-content">
        <?php
        if ($style == "channel") {
          echo('<span class="download-title">다운로드</span><span class="download-subtitle">리눅스용</span>');
        } else {
          echo('<span class="download-title">Firefox</span> 무료 다운로드');
        }
        ?>
        </span>
              </a>
    </li>
        <li class="os_osx">
      <a class="download-link download-firefox"
         href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko">
                  <span class="download-content">
        <?php
        if ($style == "channel") {
          echo('<span class="download-title">다운로드</span><span class="download-subtitle">맥오에스용</span>');
        } else {
          echo('<span class="download-title">Firefox</span> 무료 다운로드');
        }
        ?>
        </span>
              </a>
    </li>
        <li class="os_android">
      <a class="download-link download-firefox"
         href="https://market.android.com/details?id=org.mozilla.firefox">
                  <span class="download-content">
        <?php
        if ($style == "channel") {
          echo('<span class="download-title">다운로드</span><span class="download-subtitle">안드로이드용</span>');
        } else {
          echo('<span class="download-title">Firefox</span> 무료 다운로드');
        }
        ?>
        </span>
              </a>
    </li>
      </ul>
  
          <p class="unsupported-download">
      시스템이 Firefox 설치에 필요한 <a href="/ko/firefox/<?=$fx_version?>/requirements">요구 사항</a>을 맞추지 못했습니다.
    </p>
  
    <small class="download-other">
    <a href="/ko/firefox/all/">시스템 &amp; 언어선택</a> |
    <a href="//www.mozilla.org/en-US/firefox/notes">변경내역</a> |
    <a href="//www.mozilla.org/en-US/legal/privacy/firefox.html">개인정보 정책</a>
  </small>
  
</aside>
<? }

function download_button_mobile($button, $version, $style) { 
	if($style == "apps" || $style == "channel") {
    if ($version == '_aurora') {
      $id_prefix = 'aurora';
      $download_url = 'https://ftp.mozilla.org/pub/mozilla.org/mobile/nightly/latest-mozilla-aurora-android/fennec-' . $fx_aurora_version . '.multi.android-arm.apk';
    } else if ($version == '_beta') {
      $id_prefix = 'beta';
      $download_url = 'https://market.android.com/details?id=org.mozilla.firefox_beta';
    } else {
      $id_prefix = 'primary';
      $download_url = 'https://market.android.com/details?id=org.mozilla.firefox';
    }
?>
<aside id="<?=$id_prefix?>-download-mobile" class="download-button download-button-small">
    <noscript>
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 — 한국어</h4>
  <ul>
          <li><a href="<?=$download_url?>" class="button-white">안드로이드용</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 — 한국어</h4>
  <ul>
          <li><a href="" class="button-white">안드로이드용</a></li>
      </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="">
      <a class="download-link download-firefox-mobile"
         href="<?=$download_url?>">
                  <span class="download-content">
            <span class="download-title">다운로드</span>
              <span class="download-subtitle">(안드로이드용)</span>
                      </span>
              </a>
    </li>
      </ul>
  
          <p class="unsupported-download">
      시스템이 Firefox 설치에 필요한 <a href="http://www.mozilla.org/en-US/firefox/<?=$fx_aurora_version?>/requirements">요구 사항</a>을 맞추지 못했습니다.
    </p>
  
    <small class="download-other">
    <a href="/ko/firefox/all/">시스템 &amp; 언어선택</a> |
    <a href="//www.mozilla.org/en-US/firefox/notes">변경내역</a> |
    <a href="//www.mozilla.org/en-US/legal/privacy/firefox.html">개인정보 정책</a>
  </small>
</aside>

<?
		} else {

?>
<aside id="primary-download-mobile" class="download-button download-button-mobile-<?=$button?>">
	<noscript>

<div class="download download-dumb">
	<h4>Firefox 다운로드 - 한국어</h4>
	<ul>
			<li><a href="https://market.android.com/details?id=org.mozilla.firefox<?=$version?>" class="button-white">안드로이드</a></li>
		</ul>
</div> </noscript>

	<div class="unrecognized-download">

<div class="download download-dumb">
	<h4>Firefox 다운로드 - 한국어</h4>
	<ul>
			<li><a href="https://market.android.com/details?id=org.mozilla.firefox<?=$version?>" class="button-white">안드로이드</a></li>
		</ul>
</div> </div>

	<ul class="download-list">
		<li class="">
	<a class="download-link download-firefox-mobile"
		href="https://market.android.com/details?id=org.mozilla.firefox<?=$version?>">  
<?php
if ($button == "small") {
?>
		<span class="download-content">
			<span class="download-title">안드로이드용 Firefox</span>
		</span>
<?php
} else {
?>
    <span class="download-content-wrapper"> <span class="download-content">
      <span class="download-title">안드로이드용 Firefox</span>
      무료 다운로드     <span class="download-info">
  Google Play 스토어로 이동
  </span>
		</span>
       </span>
<?php
}
?>
	  </a>
	</li>
		</ul>


  <small class="download-other">
  <a href="/ko/firefox/mobile/platforms">지원 단말기</a> |
  <a href="//www.mozilla.org/en-US/mobile/notes">변경내역</a> |
  <a href="//www.mozilla.org/en-US/legal/privacy/firefox.html">개인정보 정책</a>
</small>

</aside>

<? }
 }
?>

<?
function download_button_large() { 
?>
<aside id="primary-download-mobile" class="download-button download-button-mobile-large">
    <noscript>
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 - 한국어</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">안드로이드</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 - 한국어</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">안드로이드</a></li>
      </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="">
      <a class="download-link download-firefox-mobile"
         href="https://market.android.com/details?id=org.mozilla.firefox">
          <span class="download-content-wrapper">          <span class="download-content">
            <span class="download-title">안드로이드용 Firefox</span>
            무료 다운로드              <span class="download-info">
    Google Play 스토어로 이동
  </span>
          </span>
        </span>
      </a>
    </li>
      </ul>  


  <small class="download-other">
  <a href="/ko/firefox/mobile/platforms">지원 단말기</a> |
  <a href="//www.mozilla.org/en-US/mobile/notes">변경내역</a> |
  <a href="//www.mozilla.org/en-US/legal/privacy/firefox.html">개인정보 정책</a>
</small>

</aside>
<?
}
?>
