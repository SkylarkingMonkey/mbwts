<?php
        function generate_sharing_buttons_for_podcast_page($title, $id, $sharing, $podcast_description) {
          return '
             <div class="sharing-is-a-gift-bar podcast-page-sharing-bar">
                <div class="sharing-buttons">
                  <!-- Sharingbutton Facebook -->
                  <a id="shareClick" onclick="addToShareCounter('.$id.');" class="resp-sharing-button__link " href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftinkeredthinking.com?id='.$id.'" target="_blank" aria-label="">
                    <div class="podcast-page-fb-btn resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
                      <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                      </div>
                    </div>
                  </a>
                  <!-- Sharingbutton Twitter -->
                  <a id="shareClick" onclick="addToShareCounter('.$id.');" class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text='.$title.';url=http%3A%2F%2Ftinkeredthinking.com?id='.$id.'" target="_blank" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                      <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
                      </div>
                    </div>
                  </a>
                  <!-- Sharingbutton Google+ -->
                  <a id="shareClick" onclick="addToShareCounter('.$id.');" class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Ftinkeredthinking.com?id='.$id.'" target="_blank" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--small">
                      <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg>
                      </div>
                    </div>
                  </a>
                  <!-- Sharingbutton E-Mail -->
                  <a id="shareClick" onclick="addToShareCounter('.$id.');" class="resp-sharing-button__link" href="mailto:?subject='.$title.'&amp;body=http%3A%2F%2Ftinkeredthinking.com?id='.$id.'" target="_self" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small">
                      <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg>
                      </div>
                    </div>
                  </a>
                  <!-- Sharingbutton Reddit -->
                  <a id="shareClick" onclick="addToShareCounter('.$id.');" class="resp-sharing-button__link" href="https://reddit.com/submit/?url=http%3A%2F%2Ftinkeredthinking.com?id='.$id.'&amp;title='.$title.'" target="_blank" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--small">
                      <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 11.5c0-1.65-1.35-3-3-3-.96 0-1.86.48-2.42 1.24-1.64-1-3.75-1.64-6.07-1.72.08-1.1.4-3.05 1.52-3.7.72-.4 1.73-.24 3 .5C17.2 6.3 18.46 7.5 20 7.5c1.65 0 3-1.35 3-3s-1.35-3-3-3c-1.38 0-2.54.94-2.88 2.22-1.43-.72-2.64-.8-3.6-.25-1.64.94-1.95 3.47-2 4.55-2.33.08-4.45.7-6.1 1.72C4.86 8.98 3.96 8.5 3 8.5c-1.65 0-3 1.35-3 3 0 1.32.84 2.44 2.05 2.84-.03.22-.05.44-.05.66 0 3.86 4.5 7 10 7s10-3.14 10-7c0-.22-.02-.44-.05-.66 1.2-.4 2.05-1.54 2.05-2.84zM2.3 13.37C1.5 13.07 1 12.35 1 11.5c0-1.1.9-2 2-2 .64 0 1.22.32 1.6.82-1.1.85-1.92 1.9-2.3 3.05zm3.7.13c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9.8 4.8c-1.08.63-2.42.96-3.8.96-1.4 0-2.74-.34-3.8-.95-.24-.13-.32-.44-.2-.68.15-.24.46-.32.7-.18 1.83 1.06 4.76 1.06 6.6 0 .23-.13.53-.05.67.2.14.23.06.54-.18.67zm.2-2.8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm5.7-2.13c-.38-1.16-1.2-2.2-2.3-3.05.38-.5.97-.82 1.6-.82 1.1 0 2 .9 2 2 0 .84-.53 1.57-1.3 1.87z"/></svg>
                      </div>
                    </div>
                  </a>
                  <div id="shareCounter" class="count-holder">
                    <em><a>'.$sharing.' drinkers love this B.S.</a></em>
                  </div>
                </div>
                <div class="sharing-message">
                  <!--<a class="">Just Drink it, alright?</a>-->
                </div>
                <div class="sharing-buttons">
                </div>
             </div>
              <br /><br /><br />
              <p class="podcast_description">'.$podcast_description.'
              <br /><br /><br /><br /><br />';
        }

?>



