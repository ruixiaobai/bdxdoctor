<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'sms_send' => 
    array (
      0 => 'alisms',
    ),
    'sms_notice' => 
    array (
      0 => 'alisms',
    ),
    'sms_check' => 
    array (
      0 => 'alisms',
    ),
    'addon_after_upgrade' => 
    array (
      0 => 'cms',
    ),
    'upload_after' => 
    array (
      0 => 'thumb',
    ),
  ),
  'route' => 
  array (
    '/cms$' => 'cms/index/index',
    '/cms/c/[:diyname]' => 'cms/channel/index',
    '/cms/t/[:name]' => 'cms/tags/index',
    '/cms/a/[:diyname]' => 'cms/archives/index',
    '/cms/p/[:diyname]' => 'cms/page/index',
    '/cms/s' => 'cms/search/index',
    '/cms/wxapp' => 'cms/wxapp.index/index',
    '/example$' => 'example/index/index',
    '/example/d/[:name]' => 'example/demo/index',
    '/example/d1/[:name]' => 'example/demo/demo1',
    '/example/d2/[:name]' => 'example/demo/demo2',
    '/qrcode$' => 'qrcode/index/index',
    '/qrcode/build$' => 'qrcode/index/build',
    '/third$' => 'third/index/index',
    '/third/connect/[:platform]' => 'third/index/connect',
    '/third/callback/[:platform]' => 'third/index/callback',
  ),
);