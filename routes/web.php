<?php

use Illuminate\Support\Facades\Route;

Route::post('login','AuthController@login')->name('user.login');

Route::view('login', 'auth.login')->name('login');
Route::view('register','auth.register')->name('register');

Route::resource('user', 'UserController');


Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout','AuthController@logout')->name('user.logout');
    Route::view('/', 'dashboard');
});
//member
Route::view('members/info', 'member.member-info')->name('members/info');
Route::view('member/application', 'member.application')->name('member/application');
Route::view('member/edit', 'member.edit')->name('member/edit');
Route::view('member/funds', 'member.funds')->name('member/funds');
Route::view('member/group', 'member.group')->name('member/group');
Route::view('member/online', 'member.online')->name('member/online');
Route::view('member/trace', 'member.trace')->name('member/trace');
//deposite
Route::view('deposite', 'deposite.depo')->name('deposite');
Route::view('adjustment', 'deposite.adjustment')->name('adjustment');
Route::view('merchantbank', 'deposite.merchantbank')->name('merchantbank');
Route::view('wallet', 'deposite.wallet')->name('wallet');
Route::view('withdraw', 'deposite.withdraw')->name('withdraw');
// Promotion
Route::view('promotion_member', 'promotion.member')->name('promotion_member');
Route::view('promotion_apply', 'promotion.apply')->name('promotion_apply');
Route::view('promotion_statistic', 'promotion.statistic')->name('promotion_statistic');
Route::view('promotion_code', 'promotion.code')->name('promotion_code');
Route::view('promotion_add', 'promotion.add')->name('promotion_add');
Route::view('promotion_content', 'promotion.content')->name('promotion_content');
// Rebate
Route::view('rebate_release', 'rebate.release')->name('rebate_release');
Route::view('history', 'rebate.history')->name('history');
Route::view('member_rebate', 'rebate.member_rebate')->name('member_rebate');
Route::view('rebate_setting', 'rebate.setting')->name('rebate_setting');


// system messages
Route::view('member/messages', 'SystemMessages.member_messages')->name('member/messages');
Route::view('announcement', 'SystemMessages.announcement')->name('announcement');
Route::view('system/notificaton', 'SystemMessages.system_notification')->name('system/notificaton');

// affiliate
Route::view('Affiliate/Approval', 'Affiliate.Affiliate_Approval')->name('Affiliate/Approval');
Route::view('Affiliate/List', 'Affiliate.Affiliate_List')->name('Affiliate/List');
Route::view('Affiliate/Approval/History', 'Affiliate.Affiliate_Approval_History')->name('Affiliate/Approval/History');
Route::view('Affiliate/Domain', 'Affiliate.Affiliate_Domain')->name('Affiliate/Domain');
Route::view('Affiliate/Group', 'Affiliate.Affiliate_Group')->name('Affiliate/Group');
Route::view('Affiliate/Gallery', 'Affiliate.Affiliate_Gallery')->name('Affiliate/Gallery');

// cms routes
Route::view('website/setting', 'cms.websiteSetting')->name('website/setting');
Route::view('banner/setting', 'cms.bannerSetting')->name('banner/setting');
Route::view('contact/setting', 'cms.contactSetting')->name('contact/setting');
Route::view('affliate/banner/setting', 'cms.affliateBannerSetting')->name('affliate/banner/setting');
Route::view('seo/metadata', 'cms.seo_metadata')->name('seo/metadata');
Route::view('seo/scripts', 'cms.seo_scripts')->name('seo/scripts');
Route::view('vip/banner/setting', 'cms.vip_banner_setting')->name('vip/banner/setting');
Route::view('odds/feed/setting', 'cms.odds_feed_setting')->name('odds/feed/setting');

// system settings
Route::view('game/provider', 'SystemSettings.game_provider')->name('game/provider');
Route::view('department', 'SystemSettings.department')->name('department');
Route::view('agent', 'SystemSettings.agent')->name('agent');
Route::view('adveritisement', 'SystemSettings.adveritisement')->name('adveritisement');
Route::view('IpWhitelist', 'SystemSettings.IpWhitelist')->name('IpWhitelist');

// member_complaince

Route::view('member/compliance', 'compliance.member_compliance')->name('member/compliance');
Route::view('risk/setting', 'compliance.risk_sertting')->name('risk/setting');
Route::view('withdrawal', 'compliance.withdrawal')->name('withdrawal');
Route::view('member/info', 'compliance.member_info')->name('member/info');
Route::view('member/password', 'compliance.member_password')->name('member/password');
Route::view('compliance/roadbook', 'compliance.complaint_roadbook')->name('compliance/roadbook');
Route::view('batchmember/update', 'compliance.batch_member_update')->name('batchmember/update');
//Affiliate Comm
Route::view('Aff_Generate_Comm','AffiliateComm.Aff_Generate_Comm')->name('Aff_Generate_Comm');
Route::view('Aff_Comm_History','AffiliateComm.Aff_Comm_History')->name('Aff_Comm_History');
Route::view('Aff_Withdrawal','AffiliateComm.Aff_Withdrawal')->name('Aff_Withdrawal');
Route::view('Aff_Withdrawal_History','AffiliateComm.Aff_Withdrawal_History')->name('Aff_Withdrawal_History');
Route::view('Aff_Deposit','AffiliateComm.Aff_Deposit')->name('Aff_Deposit');
Route::view('Aff_Transfer_History','AffiliateComm.Aff_Transfer_History')->name('Aff_Transfer_History');

// Bank Payment
Route::view('bank/settings', 'bank.bank_settings')->name('bank/settings');
Route::view('deposit/details', 'bank.deposit_details')->name('deposit/details');
Route::view('bank/details', 'bank.bank_details')->name('bank/details');
Route::view('transection/recon', 'bank.transection_recon')->name('transection/recon');


