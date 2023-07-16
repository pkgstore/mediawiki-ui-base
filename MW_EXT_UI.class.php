<?php

namespace MediaWiki\Extension\PkgStore;

use OutputPage, Skin;

/**
 * Class MW_EXT_UI
 */
class MW_EXT_UI
{
  /**
   * Load resource function.
   *
   * @param OutputPage $out
   * @param Skin $skin
   *
   * @return void
   */
  public static function onBeforePageDisplay(OutputPage $out, Skin $skin): void
  {
    $out->addStyle('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap', 'screen');
    $out->addStyle('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap', 'screen');
    $out->addStyle('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap', 'screen');
    $out->addStyle('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap', 'screen');
    $out->addStyle('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css', 'screen');
    $out->addStyle('/extensions/MW_EXT_UI/modules/styles/theme.css', 'screen');
    $out->addModules(['ext.mw.theme']);
  }
}
