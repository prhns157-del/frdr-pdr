<?php
// Chaves do funil. Preencha aqui (substitui as variáveis de ambiente da Vercel).
// Este arquivo é bloqueado pra acesso direto pelo .htaccess da pasta api/.
return [
  'FLEVOPAY_SECRET_KEY' => 'flevopay_sk_1592cb48f0bee842b1c92d937b4d906a7671f487e3ea2433e248172f00296db2',

  // Conversão no TikTok pelo backend (Events API). Deixe vazio pra desativar.
  'TIKTOK_PIXEL_ID' => 'DBFPK3BC77U4SEFNND10',
  'TIKTOK_ACCESS_TOKEN' => 'a8adeae690667f314675a6724e25c99e14096122',

  // Opcionais
  'TIKTOK_EVENT_NAME' => 'CompletePayment',
  'TIKTOK_TEST_EVENT_CODE' => '',
];
