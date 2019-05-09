<?php
/**
 * Project: Negarang FaceApp
 * This file is part of Negarang.
 *
 * (c) Milad Abdollahnia
 * http://milad-ab.ir
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Negarang\FaceDesigner\Items\Background\Filled;
use Negarang\FaceDesigner\Items\Background\Pattern;
use Negarang\FaceDesigner\Items\Background\Theme;
use Negarang\FaceDesigner\Items\Body;
use Negarang\FaceDesigner\Items\Effect\Weather;
use Negarang\FaceDesigner\Items\Head;
use Negarang\FaceDesigner\Items\Head\Beard;
use Negarang\FaceDesigner\Items\Head\Hair;
use Negarang\FaceDesigner\Items\Head\HairBack;
use Negarang\FaceDesigner\Items\Head\LeftEar;
use Negarang\FaceDesigner\Items\Head\LeftEye;
use Negarang\FaceDesigner\Items\Head\LeftEyebrow;
use Negarang\FaceDesigner\Items\Head\LeftEyeShadow;
use Negarang\FaceDesigner\Items\Head\Mouth;
use Negarang\FaceDesigner\Items\Head\Mustache;
use Negarang\FaceDesigner\Items\Head\Nose;
use Negarang\FaceDesigner\Items\Head\RightEar;
use Negarang\FaceDesigner\Items\Head\RightEye;
use Negarang\FaceDesigner\Items\Head\RightEyebrow;
use Negarang\FaceDesigner\Items\Head\RightEyeShadow;
use Negarang\FaceDesigner\Items\Wearable\Glasses;
use Negarang\FaceDesigner\Items\Wearable\Hat;
use Negarang\FaceDesigner\Items\Wearable\Jacket;
use Negarang\FaceDesigner\Items\Wearable\Scarf;
use Negarang\FaceDesigner\Items\Wearable\Shirt;

function faceAppConfig() {
    // Items.
    Head::config(4);
    Body::config(0);
    // Background.
    Filled::config(24);
    Pattern::config(0);
    Theme::config(0);
    // Effect.
    Weather::config(0);
    // Head.
    Beard::config(0);
    Hair::config(0);
    HairBack::config(0);
    Mouth::config(0);
    Mustache::config(0);
    Nose::config(0);
    LeftEar::config(4);
    RightEar::config(4);
    LeftEye::config(2);
    RightEye::config(2);
    LeftEyebrow::config(0);
    RightEyebrow::config(0);
    LeftEyeShadow::config(0);
    RightEyeShadow::config(0);
    // Wearable.
    Glasses::config(0);
    Hat::config(0);
    Jacket::config(0);
    Scarf::config(0);
    Shirt::config(0);
}
