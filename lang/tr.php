<?php
/**
Copyright 2011-2015 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');

class tr extends Language
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'd/m/Y';
		$dates['general_datetime'] = 'd/m/Y H:i:s';
		$dates['schedule_daily'] = 'l, d/m/Y';
		$dates['reservation_email'] = 'd/m/Y @ H:i  (e)';
		$dates['res_popup'] = 'd/m/Y H:i ';
		$dates['dashboard'] = 'l, d/m/Y H:i ';
		$dates['period_time'] = 'H:i ';
		$dates['general_date_js'] = 'yy-mm-dd';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'M/d';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'Ad';
		$strings['LastName'] = 'Soyad';
		$strings['Timezone'] = 'Zaman dilimi';
		$strings['Edit'] = 'Düzenle';
		$strings['Change'] = 'Değiştir';
		$strings['Rename'] = 'Yeniden adlandır';
		$strings['Remove'] = 'Kaldır';
		$strings['Delete'] = 'Sil';
		$strings['Update'] = 'Güncelle';
		$strings['Cancel'] = 'İptal';
		$strings['Add'] = 'Ekle';
		$strings['Name'] = 'İsim';
		$strings['Yes'] = 'Evet';
		$strings['No'] = 'Hayır';
		$strings['FirstNameRequired'] = 'Ad gerekli.';
		$strings['LastNameRequired'] = 'Soyisim gerekli.';
		$strings['PwMustMatch'] = 'Şifreler eşleşmeli.';
		$strings['ValidEmailRequired'] = 'Geçerli bir email adresi gerekli.';
		$strings['UniqueEmailRequired'] = 'Bu email daha önce kaydedilmiş.';
		$strings['UniqueUsernameRequired'] = 'Bu kullanıcı adı daha önce kaydedilmiş.';
		$strings['UserNameRequired'] = 'Kullanıcı adı.';
		$strings['CaptchaMustMatch'] = 'Lütfen güvenlik resmindeki harflerin girişini yapınız.';
		$strings['Today'] = 'Bugün';
		$strings['Week'] = 'Hafta';
		$strings['Month'] = 'Ay';
		$strings['BackToCalendar'] = 'Takvime geri dön';
		$strings['BeginDate'] = 'Başlangıç';
		$strings['EndDate'] = 'Bitiş';
		$strings['Username'] = 'Kullanıcı adı';
		$strings['Password'] = 'Şifre';
		$strings['PasswordConfirmation'] = 'Şifre Doğrula';
		$strings['DefaultPage'] = 'Varsayılan Sayfa';
		$strings['MyCalendar'] = 'Takvimim';
		$strings['ScheduleCalendar'] = 'Program Takvimi';
		$strings['Registration'] = 'Kayıt';
		$strings['NoAnnouncements'] = 'Hiçbir duyuru yapılmamış';
		$strings['Announcements'] = 'Duyurular';
		$strings['NoUpcomingReservations'] = 'Yaklaşan rezervasyonunuz yok.';
		$strings['UpcomingReservations'] = 'Gelecek Rezervasyonlar';
		$strings['AllNoUpcomingReservations'] = 'Önümüzdeki %s günlerde rezervasyonunuz yoktur';
		$strings['AllUpcomingReservations'] = 'Bütün gelecek rezervasyonlar';
		$strings['ShowHide'] = 'Göster/Sakla';
		$strings['Error'] = 'Hata';
		$strings['ReturnToPreviousPage'] = 'Önceki sayfaya geri dönün';
		$strings['UnknownError'] = 'Bilinmeyen Hata';
		$strings['InsufficientPermissionsError'] = 'Bu kaynağa ulaşma hakkınız yok';
		$strings['MissingReservationResourceError'] = 'Bu kaynak seçilmemiş';
		$strings['MissingReservationScheduleError'] = 'Program seçilmemiş';
		$strings['DoesNotRepeat'] = 'Tekrar Etme';
		$strings['Daily'] = 'Günlük';
		$strings['Weekly'] = 'Haftalık';
		$strings['Monthly'] = 'Aylık';
		$strings['Yearly'] = 'Yıllık';
		$strings['RepeatPrompt'] = 'Tekrar Eden Eğitim Günü';
		$strings['hours'] = 'saat';
		$strings['days'] = 'gün';
		$strings['weeks'] = 'hafta';
		$strings['months'] = 'ay';
		$strings['years'] = 'yıl';
		$strings['day'] = 'day';
		$strings['week'] = 'hafta';
		$strings['month'] = 'ay';
		$strings['year'] = 'yıl';
		$strings['repeatDayOfMonth'] = 'ayın günü';
		$strings['repeatDayOfWeek'] = 'haftanın günü';
		$strings['RepeatUntilPrompt'] = 'Eğitim Bitimi';
		$strings['RepeatEveryPrompt'] = 'Her';
		$strings['RepeatDaysPrompt'] = 'Gün';
		$strings['CreateReservationHeading'] = 'Yeni rezervasyon yarat';
		$strings['EditReservationHeading'] = '%s Rezervasyonu düzenleniyor';
		$strings['ViewReservationHeading'] = '%s Rezervasyonu görüntüleniyor';
		$strings['ReservationErrors'] = 'Rezervasyon değiştir';
		$strings['Create'] = 'Yarat';
		$strings['ThisInstance'] = 'Evet';
		$strings['AllInstances'] = 'Hepsine';
		$strings['FutureInstances'] = 'Gelecek durumlarda';
		$strings['Print'] = 'Yazdır';
		$strings['ShowHideNavigation'] = 'Navigation Görüntüle/Sakla';
		$strings['ReferenceNumber'] = 'Referans Numarası';
		$strings['Tomorrow'] = 'Yarın';
		$strings['LaterThisWeek'] = 'Bu hafta içinde';
		$strings['NextWeek'] = 'Gelecek hafta';
		$strings['SignOut'] = 'Çıkış yap';
		$strings['LayoutDescription'] = 'Starts on %s, showing %s days at a time';
		$strings['AllResources'] = 'Bütün kaynaklar';
		$strings['TakeOffline'] = 'Çevrimdışı ol';
		$strings['BringOnline'] = 'Çevrimiçi ol';
		$strings['AddImage'] = 'Resim ekle';
		$strings['NoImage'] = 'Resim belirtilmemiş';
		$strings['Move'] = 'Taşı';
		$strings['AppearsOn'] = '%s da görünüyor';
		$strings['Location'] = 'Yer';
		$strings['NoLocationLabel'] = '(yer belirtilmemiş)';
		$strings['Contact'] = 'İletişim';
		$strings['NoContactLabel'] = '(İletişim bilgileri girilmemiş)';
		$strings['Description'] = 'Açıklama';
		$strings['NoDescriptionLabel'] = '(Açıklama yok)';
		$strings['Notes'] = 'Notlar';
		$strings['NoNotesLabel'] = '(not yok)';
		$strings['NoTitleLabel'] = '(başlıksız)';
		$strings['UsageConfiguration'] = 'Kullanım ayarları';
		$strings['ChangeConfiguration'] = 'Ayarları değiştir';
		$strings['ResourceMinLength'] = 'Rezervasyon en az %s olmalı';
		$strings['ResourceMinLengthNone'] = 'Minimum rezervasyon süresi yok';
		$strings['ResourceMaxLength'] = 'Rezervasyon en az %s olmalı';
		$strings['ResourceMaxLengthNone'] = 'Maximum rezervasyon süresi yok';
		$strings['ResourceRequiresApproval'] = 'Rezervasyon onaylanmalı';
		$strings['ResourceRequiresApprovalNone'] = 'Rezervasyon onay gerektirmiyor';
		$strings['ResourcePermissionAutoGranted'] = 'Permission is automatically granted';
		$strings['ResourcePermissionNotAutoGranted'] = 'Permission is not automatically granted';
		$strings['ResourceMinNotice'] = 'Reservations must be made at least %s prior to start time';
		$strings['ResourceMinNoticeNone'] = 'Reservations can be made up until the current time';
		$strings['ResourceMaxNotice'] = 'Reservations must not end more than %s from the current time';
		$strings['ResourceMaxNoticeNone'] = 'Reservations can end at any point in the future';
		$strings['ResourceBufferTime'] = 'There must be %s between reservations';
		$strings['ResourceBufferTimeNone'] = 'There is no buffer between reservations';
		$strings['ResourceAllowMultiDay'] = 'Reservations can be made across days';
		$strings['ResourceNotAllowMultiDay'] = 'Reservations cannot be made across days';
		$strings['ResourceCapacity'] = 'This resource has a capacity of %s people';
		$strings['ResourceCapacityNone'] = 'This resource has unlimited capacity';
		$strings['AddNewResource'] = 'Yeni kaynak ekle';
		$strings['AddNewUser'] = 'Yeni kullanıı ekle';
		$strings['AddUser'] = 'Kullanıcı ekle';
		$strings['Schedule'] = 'Program';
		$strings['AddResource'] = 'Kaynak ekle';
		$strings['Capacity'] = 'Kapasite';
		$strings['Access'] = 'Ulaşım';
		$strings['Duration'] = 'Süre';
		$strings['Active'] = 'Aktif';
		$strings['Inactive'] = 'İnaktif';
		$strings['ResetPassword'] = 'Şifre sıfılra';
		$strings['LastLogin'] = 'Son giriş';
		$strings['Search'] = 'Ara';
		$strings['ResourcePermissions'] = 'Kaynak izni';
		$strings['Reservations'] = 'Rezervasyonlar';
		$strings['Groups'] = 'Gruplar';
		$strings['Users'] = 'Kullanıcılar';
		$strings['ResetPassword'] = 'Şifre sıfırla';
		$strings['AllUsers'] = 'Bütün kullanıcılar';
		$strings['AllGroups'] = 'Bütün gruplar';
		$strings['AllSchedules'] = 'Bütün programlar';
		$strings['UsernameOrEmail'] = 'Kullanıcı adı veya email';
		$strings['Members'] = 'Üyeler';
		$strings['QuickSlotCreation'] = 'Her %s dakika  %s ve %s arası yer aç';
		$strings['ApplyUpdatesTo'] = 'Güncellenemeleri rezerasyona etkinleştir';
		$strings['CancelParticipation'] = 'Katılımı iptal et';
		$strings['Attending'] = 'Katılıyor';
		$strings['QuotaConfiguration'] = 'On %s for %s users in %s are limited to %s %s per %s';
		$strings['reservations'] = 'rezervasyonlar';
		$strings['reservation'] = 'rezervasyon';
		$strings['ChangeCalendar'] = 'Takvim Değiştir';
		$strings['AddQuota'] = 'Kota Ekle';
		$strings['FindUser'] = 'Kullanıcı bul';
		$strings['Created'] = 'Yaratıldı';
		$strings['LastModified'] = 'Son değişiklik';
		$strings['GroupName'] = 'Grup Adı';
		$strings['GroupMembers'] = 'Grup Üyeleri';
		$strings['GroupRoles'] = 'Grup Rolleri';
		$strings['GroupAdmin'] = 'Grup Yöneticileri';
		$strings['Actions'] = 'Eylemler';
		$strings['CurrentPassword'] = 'Mevcut Şifre';
		$strings['NewPassword'] = 'Yeni şifre';
		$strings['InvalidPassword'] = 'Mevcut şifre doğru değil';
		$strings['PasswordChangedSuccessfully'] = 'Şifreniz başarıyla değiştirildi';
		$strings['SignedInAs'] = 'Giriş yap';
		$strings['NotSignedIn'] = 'Giriş yapmadınız';
		$strings['ReservationTitle'] = 'Rezervasyon başlığı';
		$strings['ReservationDescription'] = 'Eğitim Notu';
		$strings['ResourceList'] = 'Rezerve edilecek kaynak';
		$strings['Accessories'] = 'Aksesuarlar';
		$strings['ParticipantList'] = 'Katılımcılar';
		$strings['InvitationList'] = 'Bekleyen Listesi';
		$strings['AccessoryName'] = 'Aksesuar adı';
		$strings['QuantityAvailable'] = 'Geçerli miktar';
		$strings['Resources'] = 'Kaynaklar';
		$strings['Participants'] = 'Katılımcılar';
		$strings['User'] = 'Kullanıcı';
		$strings['Resource'] = 'Kaynak';
		$strings['Status'] = 'Durum';
		$strings['Approve'] = 'Onayla';
		$strings['Page'] = 'Sayfa';
		$strings['Rows'] = 'Satırlar';
		$strings['Unlimited'] = 'Limitsiz';
		$strings['Email'] = 'Email';
		$strings['EmailAddress'] = 'Email Adresi';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Organizasyon /Klüp';
		$strings['Position'] = 'Yelken Tecrübesi';
		$strings['Language'] = 'Dil';
		$strings['Permissions'] = 'İzinler';
		$strings['Reset'] = 'Sıfırla';
		$strings['FindGroup'] = 'Grup Bul';
		$strings['Manage'] = 'Yönet';
		$strings['Payment'] = 'Ödeme Yap';
		$strings['None'] = 'Hiç';
		$strings['AddToOutlook'] = 'Takvime ekle';
		$strings['Done'] = 'Done';
		$strings['RememberMe'] = 'Beni hatırla';
		$strings['FirstTimeUser?'] = '';
		$strings['CreateAnAccount'] = 'Hesap Yarat';
		$strings['ViewSchedule'] = 'Takvime Bak';
		$strings['ForgotMyPassword'] = 'Şifremi Unuttum';
		$strings['YouWillBeEmailedANewPassword'] = 'Rastgele oluştulmuş bir şifre emailnize ulaşacaktır.';
		$strings['Close'] = 'Kapat';
		$strings['Continue']= 'Devam';
		$strings['ExportToCSV'] = 'Export to CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Çalışılıyor...';
		$strings['Login'] = 'Giriş';
		$strings['AdditionalInformation'] = 'Ek Bilgiler';
		$strings['AllFieldsAreRequired'] = 'Bütün alanlar zorunludur';
		$strings['Optional'] = 'opsiyonel';
		$strings['YourProfileWasUpdated'] = 'Profiliniz güncellendi';
		$strings['YourSettingsWereUpdated'] = 'Ayarlarınız güncellendi';
		$strings['Register'] = 'Kayıt ol';
		$strings['SecurityCode'] = 'Güvenlik kodu';
		$strings['ReservationCreatedPreference'] = 'When I create a reservation or a reservation is created on my behalf';
		$strings['ReservationUpdatedPreference'] = 'When I update a reservation or a reservation is updated on my behalf';
		$strings['ReservationDeletedPreference'] = 'When I delete a reservation or a reservation is deleted on my behalf';
		$strings['ReservationApprovalPreference'] = 'When my pending reservation is approved';
		$strings['PreferenceSendEmail'] = 'Bana email at';
		$strings['PreferenceNoEmail'] = 'Beni bilgilendirme';
		$strings['ReservationCreated'] = 'Rezervasyonunuz başarıyla kaydedildi!';
		$strings['ReservationUpdated'] = 'Rezervasyonunuz başarıyla güncellendi!';
		$strings['ReservationRemoved'] = 'Rezervasyonunuz silindi';
		$strings['ReservationRequiresApproval'] = 'Rezervasyon talebiniz alınmıştır. Talebinizin gerçekleşmesi için Eğitim koordinatörü onayı gereklidir.';
		$strings['YourReferenceNumber'] = 'Referans numarınız %s';
		$strings['UpdatingReservation'] = 'Rezervasyonunuz güncelleniyor';
		$strings['ChangeUser'] = 'Kullanıcı değiştir';
		$strings['MoreResources'] = 'Daha fazla kaynak';
		$strings['ReservationLength'] = 'Eğitim süresi';
		$strings['ParticipantList'] = 'Katılımcı Listesi';
		$strings['AddParticipants'] = 'Katılımcı Ekle';
		$strings['InviteOthers'] = 'Başkalarını Ekle';
		$strings['AddResources'] = 'Tekne Ekle';
		$strings['AddAccessories'] = 'Add Accessories';
		$strings['Accessory'] = 'Accessory';
		$strings['QuantityRequested'] = 'Quantity Requested';
		$strings['CreatingReservation'] = 'Creating Reservation';
		$strings['UpdatingReservation'] = 'Updating Reservation';
		$strings['DeleteWarning'] = 'This action is permanent and irrecoverable!';
		$strings['DeleteAccessoryWarning'] = 'Deleting this accessory will remove it from all reservations.';
		$strings['AddAccessory'] = 'Add Accessory';
		$strings['AddBlackout'] = 'Add Blackout';
		$strings['AllResourcesOn'] = 'All Resources On';
		$strings['Reason'] = 'Sebep';
		$strings['BlackoutShowMe'] = 'Show me conflicting reservations';
		$strings['BlackoutDeleteConflicts'] = 'Delete conflicting reservations';
		$strings['Filter'] = 'Filter';
		$strings['Between'] = 'Between';
		$strings['CreatedBy'] = 'Created By';
		$strings['BlackoutCreated'] = 'Blackout Created';
		$strings['BlackoutNotCreated'] = 'Blackout could not be created';
		$strings['BlackoutUpdated'] = 'Blackout Updated';
		$strings['BlackoutNotUpdated'] = 'Blackout could not be updated';
		$strings['BlackoutConflicts'] = 'There are conflicting blackout times';
		$strings['ReservationConflicts'] = 'There are conflicting reservations times';
		$strings['UsersInGroup'] = 'Users in this group';
		$strings['Browse'] = 'Browse';
		$strings['DeleteGroupWarning'] = 'Deleting this group will remove all associated resource permissions.  Users in this group may lose access to resources.';
		$strings['WhatRolesApplyToThisGroup'] = 'Which roles apply to this group?';
		$strings['WhoCanManageThisGroup'] = 'Who can manage this group?';
		$strings['WhoCanManageThisSchedule'] = 'Who can manage this schedule?';
		$strings['AddGroup'] = 'Add Group';
		$strings['AllQuotas'] = 'All Quotas';
		$strings['QuotaReminder'] = 'Remember: Quotas are enforced based on the schedule\'s timezone.';
		$strings['AllReservations'] = 'Bütün Rezervasyonlar';
		$strings['PendingReservations'] = 'Onay Bekleyen Rezervasyonlar';
		$strings['Approving'] = 'Oaylanıyor';
		$strings['MoveToSchedule'] = 'Programa taşı';
		$strings['DeleteResourceWarning'] = 'Deleting this resource will delete all associated data, including';
		$strings['DeleteResourceWarningReservations'] = 'all past, current and future reservations associated with it';
		$strings['DeleteResourceWarningPermissions'] = 'all permission assignments';
		$strings['DeleteResourceWarningReassign'] = 'Please reassign anything that you do not want to be deleted before proceeding';
		$strings['ScheduleLayout'] = 'Layout (all times %s)';
		$strings['ReservableTimeSlots'] = 'Reservable Time Slots';
		$strings['BlockedTimeSlots'] = 'Blocked Time Slots';
		$strings['ThisIsTheDefaultSchedule'] = 'This is the default schedule';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Default schedule cannot be deleted';
		$strings['MakeDefault'] = 'Make Default';
		$strings['BringDown'] = 'Bring Down';
		$strings['ChangeLayout'] = 'Change Layout';
		$strings['AddSchedule'] = 'Add Schedule';
		$strings['StartsOn'] = 'Starts On';
		$strings['NumberOfDaysVisible'] = 'Number of Days Visible';
		$strings['UseSameLayoutAs'] = 'Use Same Layout As';
		$strings['Format'] = 'Format';
		$strings['Payment'] = 'Kredi Ekle';
		$strings['OptionalLabel'] = 'Optional Label';
		$strings['LayoutInstructions'] = 'Enter one slot per line.  Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['AddUser'] = 'Add User';
		$strings['UserPermissionInfo'] = 'Actual access to resource may be different depending on user role, group permissions, or external permission settings';
		$strings['DeleteUserWarning'] = 'Deleting this user will remove all of their current, future, and historical reservations.';
		$strings['AddAnnouncement'] = 'Add Announcement';
		$strings['Announcement'] = 'Anons';
		$strings['Priority'] = 'Öncelikli';
		$strings['Reservable'] = 'Talep Aç';
		$strings['Unreservable'] = 'Rezerve edilemez';
		$strings['Reserved'] = 'Katılabilirsin :)';
		$strings['MyReservation'] = 'Talebim';
		$strings['Pending'] = 'Talebe Katıl';
		$strings['Past'] = 'Geçmiş';
		$strings['Restricted'] = 'Müsait Değil';
		$strings['ViewAll'] = 'View All';
		$strings['MoveResourcesAndReservations'] = 'Move resources and reservations to';
		$strings['TurnOffSubscription'] = 'Turn Off Calendar Subscriptions';
		$strings['TurnOnSubscription'] = 'Allow Subscriptions to this Calendar';
		$strings['SubscribeToCalendar'] = 'Subscribe to this Calendar';
		$strings['SubscriptionsAreDisabled'] = 'The administrator has disabled calendar subscriptions';
		$strings['NoResourceAdministratorLabel'] = '(No Resource Administrator)';
		$strings['WhoCanManageThisResource'] = 'Who Can Manage This Resource?';
		$strings['ResourceAdministrator'] = 'Resource Administrator';
		$strings['Private'] = 'Private';
		$strings['Accept'] = 'Kabul et';
		$strings['Decline'] = 'Reddet';
		$strings['ShowFullWeek'] = 'Show Full Week';
		$strings['CustomAttributes'] = 'Custom Attributes';
		$strings['AddAttribute'] = 'Add an Attribute';
		$strings['EditAttribute'] = 'Update an Attribute';
		$strings['DisplayLabel'] = 'Display Label';
		$strings['Type'] = 'Type';
		$strings['Required'] = 'Required';
		$strings['ValidationExpression'] = 'Validation Expression';
		$strings['PossibleValues'] = 'Possible Values';
		$strings['SingleLineTextbox'] = 'Single Line Textbox';
		$strings['MultiLineTextbox'] = 'Multiple Line Textbox';
		$strings['Checkbox'] = 'Checkbox';
		$strings['SelectList'] = 'Select List';
		$strings['CommaSeparated'] = 'comma separated';
		$strings['Category'] = 'Category';
		$strings['CategoryReservation'] = 'Reservation';
		$strings['CategoryGroup'] = 'Group';
		$strings['SortOrder'] = 'Sort Order';
		$strings['Title'] = 'Title';
		$strings['AdditionalAttributes'] = 'Additional Attributes';
		$strings['True'] = 'True';
		$strings['False'] = 'False';
		$strings['ForgotPasswordEmailSent'] = 'An email has been sent to the address provided with instructions for resetting your password';
		$strings['ActivationEmailSent'] = 'You will receive an activation email soon.';
		$strings['AccountActivationError'] = 'Sorry, we could not activate your account.';
		$strings['Attachments'] = 'Attachments';
		$strings['AttachFile'] = 'Attach File';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'No Schedule Administrator';
		$strings['ScheduleAdministrator'] = 'Schedule Administrator';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Quantity Reserved';
		$strings['AllAccessories'] = 'All Accessories';
		$strings['GetReport'] = 'Get Report';
		$strings['NoResultsFound'] = 'No matching results found';
		$strings['SaveThisReport'] = 'Save This Report';
		$strings['ReportSaved'] = 'Report Saved!';
		$strings['EmailReport'] = 'Email Report';
		$strings['ReportSent'] = 'Report Sent!';
		$strings['RunReport'] = 'Run Report';
		$strings['NoSavedReports'] = 'You have no saved reports.';
		$strings['CurrentWeek'] = 'Current Week';
		$strings['CurrentMonth'] = 'Current Month';
		$strings['AllTime'] = 'All Time';
		$strings['FilterBy'] = 'Filter By';
		$strings['Select'] = 'Select';
		$strings['List'] = 'List';
		$strings['TotalTime'] = 'Total Time';
		$strings['Count'] = 'Count';
		$strings['Usage'] = 'Usage';
		$strings['AggregateBy'] = 'Aggregate By';
		$strings['Range'] = 'Range';
		$strings['Choose'] = 'Choose';
		$strings['All'] = 'All';
		$strings['ViewAsChart'] = 'View As Chart';
		$strings['ReservedResources'] = 'Reserved Resources';
		$strings['ReservedAccessories'] = 'Reserved Accessories';
		$strings['ResourceUsageTimeBooked'] = 'Resource Usage - Time Booked';
		$strings['ResourceUsageReservationCount'] = 'Resource Usage - Reservation Count';
		$strings['Top20UsersTimeBooked'] = 'Top 20 Users - Time Booked';
		$strings['Top20UsersReservationCount'] = 'Top 20 Users - Reservation Count';
		$strings['ConfigurationUpdated'] = 'The configuration file was updated';
		$strings['ConfigurationUiNotEnabled'] = 'This page cannot be accessed because $conf[\'settings\'][\'pages\'][\'enable.configuration\'] is set to false or missing.';
		$strings['ConfigurationFileNotWritable'] = 'The config file is not writable. Please check the permissions of this file and try again.';
		$strings['ConfigurationUpdateHelp'] = 'Refer to the Configuration section of the <a target=_blank href=%s>Help File</a> for documentation on these settings.';
		$strings['GeneralConfigSettings'] = 'settings';
		$strings['UseSameLayoutForAllDays'] = 'Use the same layout for all days';
		$strings['LayoutVariesByDay'] = 'Layout varies by day';
		$strings['ManageReminders'] = 'Reminders';
		$strings['ReminderUser'] = 'User ID';
		$strings['ReminderMessage'] = 'Message';
		$strings['ReminderAddress'] = 'Addresses';
		$strings['ReminderSendtime'] = 'Time To Send';
		$strings['ReminderRefNumber'] = 'Reservation Reference Number';
		$strings['ReminderSendtimeDate'] = 'Date of Reminder';
		$strings['ReminderSendtimeTime'] = 'Time of Reminder (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Add Reminder';
		$strings['DeleteReminderWarning'] = 'You sure about this?';
		$strings['NoReminders'] = 'You have no upcoming reminders.';
		$strings['Reminders'] = 'Reminders';
		$strings['SendReminder'] = 'Send Reminder';
		$strings['minutes'] = 'dakika';
		$strings['hours'] = 'saat';
		$strings['days'] = 'gün';
		$strings['ReminderBeforeStart'] = 'before the start time';
		$strings['ReminderBeforeEnd'] = 'before the end time';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS File';
		$strings['ThemeUploadSuccess'] = 'Your changes have been saved. Refresh the page for changes to take effect.';
		$strings['MakeDefaultSchedule'] = 'Make this my default schedule';
		$strings['DefaultScheduleSet'] = 'This is now your default schedule';
		$strings['FlipSchedule'] = 'Flip the schedule layout';
		$strings['Next'] = 'Next';
		$strings['Success'] = 'Success';
		$strings['Participant'] = 'Katılımcı';
		$strings['ResourceFilter'] = 'Resource Filter';
		$strings['ResourceGroups'] = 'Resource Groups';
		$strings['AddNewGroup'] = 'Add a new group';
		$strings['Quit'] = 'Quit';
		$strings['AddGroup'] = 'Add Group';
		$strings['StandardScheduleDisplay'] = 'Use the standard schedule display';
		$strings['TallScheduleDisplay'] = 'Use the tall schedule display';
		$strings['WideScheduleDisplay'] = 'Use the wide schedule display';
		$strings['CondensedWeekScheduleDisplay'] = 'Use condensed week schedule display';
		$strings['ResourceGroupHelp1'] = 'Drag and drop resource groups to reorganize.';
		$strings['ResourceGroupHelp2'] = 'Right click a resource group name for additional actions.';
		$strings['ResourceGroupHelp3'] = 'Drag and drop resources to add them to groups.';
		$strings['ResourceGroupWarning'] = 'If using resource groups, each resource must be assigned to at least one group. Unassigned resources will not be able to be reserved.';
		$strings['ResourceType'] = 'Resource Type';
		$strings['AppliesTo'] = 'Applies To';
		$strings['UniquePerInstance'] = 'Unique Per Instance';
		$strings['AddResourceType'] = 'Add Resource Type';
		$strings['NoResourceTypeLabel'] = '(no resource type set)';
		$strings['ClearFilter'] = 'Clear Filter';
		$strings['MinimumCapacity'] = 'Minimum Capacity';
		$strings['Color'] = 'Color';
		$strings['Available'] = 'Available';
		$strings['Unavailable'] = 'Unavailable';
		$strings['Hidden'] = 'Hidden';
		$strings['ResourceStatus'] = 'Resource Status';
		$strings['CurrentStatus'] = 'Current Status';
		$strings['AllReservationResources'] = 'All Reservation Resources';
		$strings['File'] = 'File';
		$strings['BulkResourceUpdate'] = 'Bulk Resource Update';
		$strings['Unchanged'] = 'Unchanged';
		$strings['Common'] = 'Common';
		$strings['AdvancedFilter'] = 'Advanced Filter';
		$strings['AllParticipants'] = 'All Participants';
		$strings['ResourceAvailability'] = 'Resource Availability';
		$strings['UnavailableAllDay'] = 'Unavailable All Day';
		$strings['AvailableUntil'] = 'Available Until';
		$strings['AvailableBeginningAt'] = 'Available Beginning At';
		$strings['AllowParticipantsToJoin'] = 'Allow Participants To Join';
		$strings['JoinThisReservation'] = 'Join This Reservation';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Install Booked Scheduler (MySQL only)';
		$strings['IncorrectInstallPassword'] = 'Sorry, that password was incorrect.';
		$strings['SetInstallPassword'] = 'You must set an install password before the installation can be run.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'There is no upgrade needed. Running the installation process will delete all existing data and install a new copy of Booked Scheduler!';
		$strings['ProvideInstallPassword'] = 'Please provide your installation password.';
		$strings['InstallPasswordLocation'] = 'This can be found at %s in %s.';
		$strings['VerifyInstallSettings'] = 'Verify the following default settings before continuing. Or you can change them in %s.';
		$strings['DatabaseName'] = 'Database Name';
		$strings['DatabaseUser'] = 'Database User';
		$strings['DatabaseHost'] = 'Database Host';
		$strings['DatabaseCredentials'] = 'You must provide credentials of a MySQL user who has privileges to create databases. If you do not know, contact your database admin. In many cases, root will work.';
		$strings['MySQLUser'] = 'MySQL User';
		$strings['InstallOptionsWarning'] = 'The following options will probably not work in a hosted environment. If you are installing in a hosted environment, use the MySQL wizard tools to complete these steps.';
		$strings['CreateDatabase'] = 'Create the database';
		$strings['CreateDatabaseUser'] = 'Create the database user';
		$strings['PopulateExampleData'] = 'Import sample data. Creates admin account: admin/password and user account: user/password';
		$strings['DataWipeWarning'] = 'Warning: This will delete any existing data';
		$strings['RunInstallation'] = 'Run Installation';
		$strings['UpgradeNotice'] = 'You are upgrading from version <b>%s</b> to version <b>%s</b>';
		$strings['RunUpgrade'] = 'Run Upgrade';
		$strings['Executing'] = 'Executing';
		$strings['StatementFailed'] = 'Failed. Details:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Error Code:';
		$strings['ErrorText'] = 'Error Text:';
		$strings['InstallationSuccess'] = 'Installation completed successfully!';
		$strings['RegisterAdminUser'] = 'Register your admin user. This is required if you did not import the sample data. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'If you imported the sample data, you can log in with admin/password for admin user or user/password for basic user.';
		$strings['InstalledVersion'] = 'You are now running version %s of Booked Scheduler';
		$strings['InstallUpgradeConfig'] = 'It is recommended to upgrade your config file';
		$strings['InstallationFailure'] = 'There were problems with the installation.  Please correct them and retry the installation.';
		$strings['ConfigureApplication'] = 'Configure Booked Scheduler';
		$strings['ConfigUpdateSuccess'] = 'Your config file is now up to date!';
		$strings['ConfigUpdateFailure'] = 'We could not automatically update your config file. Please overwrite the contents of config.php with the following:';
		$strings['SelectUser'] = 'Select User';
		// End Install

		// Errors
		$strings['LoginError'] = 'We could not match your username or password';
		$strings['ReservationFailed'] = 'Your reservation could not be made';
		$strings['MinNoticeError'] = 'This reservation requires advance notice.  The earliest date and time that can be reserved is %s.';
		$strings['MaxNoticeError'] = 'This reservation cannot be made this far in the future.  The latest date and time that can be reserved is %s.';
		$strings['MinDurationError'] = 'This reservation must last at least %s.';
		$strings['MaxDurationError'] = 'This reservation cannot last longer than %s.';
		$strings['ConflictingAccessoryDates'] = 'There are not enough of the following accessories:';
		$strings['NoResourcePermission'] = 'You do not have permission to access one or more of the requested resources.';
		$strings['ConflictingReservationDates'] = 'There are conflicting reservations on the following dates:';
		$strings['StartDateBeforeEndDateRule'] = 'The start date and time must be before the end date and time.';
		$strings['StartIsInPast'] = 'The start date and time cannot be in the past.';
		$strings['EmailDisabled'] = 'The administrator has disabled email notifications.';
		$strings['ValidLayoutRequired'] = 'Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['CustomAttributeErrors'] = 'There are problems with the additional attributes you provided:';
		$strings['CustomAttributeRequired'] = '%s is a required field.';
		$strings['CustomAttributeInvalid'] = 'The value provided for %s is invalid.';
		$strings['AttachmentLoadingError'] = 'Sorry, there was a problem loading the requested file.';
		$strings['InvalidAttachmentExtension'] = 'You can only upload files of type: %s';
		$strings['InvalidStartSlot'] = 'The start date and time requested is not valid.';
		$strings['InvalidEndSlot'] = 'The end date and time requested is not valid.';
		$strings['MaxParticipantsError'] = '%s can only support %s participants.';
		$strings['ReservationCriticalError'] = 'There was a critical error saving your reservation. If this continues, contact your system administrator.';
		$strings['InvalidStartReminderTime'] = 'The start reminder time is not valid.';
		$strings['InvalidEndReminderTime'] = 'The end reminder time is not valid.';
		$strings['QuotaExceeded'] = 'Quota limit exceeded.';
		$strings['MultiDayRule'] = '%s does not allow reservations across days.';
		$strings['InvalidReservationData'] = 'There were problems with your reservation request.';
		$strings['PasswordError'] = 'Password must contain at least %s letters and at least %s numbers.';
		$strings['PasswordErrorRequirements'] = 'Password must contain a combination of at least %s upper and lower case letters and %s numbers.';
		$strings['NoReservationAccess'] = 'You are not allowed to change this reservation.';
		$strings['PasswordControlledExternallyError'] = 'Your password is controlled by an external system and cannot be updated here.';
		$strings['NoResources'] = 'You have not added any resources.';
		$strings['ParticipationNotAllowed'] = 'Eğitimin başlamasına izin verilen değişiklik süresinden az kaldığı için değişiklik yapamazsınız.';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Create Reservation';
		$strings['EditReservation'] = 'Editing Reservation';
		$strings['LogIn'] = 'Giriş Yap';
		$strings['ManageReservations'] = 'Reservations';
		$strings['AwaitingActivation'] = 'Awaiting Activation';
		$strings['PendingApproval'] = 'Pending Approval';
		$strings['ManageSchedules'] = 'Schedules';
		$strings['ManageResources'] = 'Resources';
		$strings['ManageAccessories'] = 'Accessories';
		$strings['ManageUsers'] = 'Users';
		$strings['ManageGroups'] = 'Groups';
		$strings['ManageQuotas'] = 'Quotas';
		$strings['ManageBlackouts'] = 'Blackout Times';
		$strings['MyDashboard'] = 'Eğitim Panelim';
		$strings['ServerSettings'] = 'Server Ayarları';
		$strings['Dashboard'] = 'Eğitim Panelim';
		$strings['Help'] = 'Help';
		$strings['Administration'] = 'Yönetim';
		$strings['About'] = 'Hakkında';
		$strings['Bookings'] = 'Eğitime Başla!';
		$strings['Schedule'] = 'Eğitime Başla!';
		$strings['Reservations'] = 'Rezervasyonlar';
		$strings['Account'] = 'Hesap';
		$strings['EditProfile'] = 'Profilimi Düzenle';
		$strings['FindAnOpening'] = 'Find An Opening';
		$strings['OpenInvitations'] = 'Bekleyen Davetlerim';
		$strings['MyCalendar'] = 'Takvimim';
		$strings['ResourceCalendar'] = 'Resource Calendar';
		$strings['Reservation'] = 'New Reservation';
		$strings['Install'] = 'Installation';
		$strings['ChangePassword'] = 'Şifremi Değiştir';
		$strings['MyAccount'] = 'Hesabım';
		$strings['Profile'] = 'Profil';
		$strings['ApplicationManagement'] = 'Uygulama Yönetimi';
		$strings['ForgotPassword'] = 'Forgot Password';
		$strings['NotificationPreferences'] = 'Bildirim Merkezi';
		$strings['ManageAnnouncements'] = 'Duyurular';
		$strings['Responsibilities'] = 'Responsibilities';
		$strings['GroupReservations'] = 'Group Reservations';
		$strings['ResourceReservations'] = 'Resource Reservations';
		$strings['Customization'] = 'Customization';
		$strings['Attributes'] = 'Attributes';
		$strings['AccountActivation'] = 'Account Activation';
		$strings['ScheduleReservations'] = 'Schedule Reservations';
		$strings['Reports'] = 'Raporlar';
		$strings['GenerateReport'] = 'Yeni Rapor Yarat';
		$strings['MySavedReports'] = 'My Saved Reports';
		$strings['CommonReports'] = 'Common Reports';
		$strings['ViewDay'] = 'View Day';
		$strings['Group'] = 'Group';
		$strings['ManageConfiguration'] = 'Application Configuration';
		$strings['LookAndFeel'] = 'Look and Feel';
		$strings['ManageResourceGroups'] = 'Resource Groups';
		$strings['ManageResourceTypes'] = 'Resource Types';
		$strings['ManageResourceStatus'] = 'Resource Statuses';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'P';
		$strings['DayMondaySingle'] = 'P';
		$strings['DayTuesdaySingle'] = 'S';
		$strings['DayWednesdaySingle'] = 'Ç';
		$strings['DayThursdaySingle'] = 'P';
		$strings['DayFridaySingle'] = 'C';
		$strings['DaySaturdaySingle'] = 'C';

		$strings['DaySundayAbbr'] = 'Pzr';
		$strings['DayMondayAbbr'] = 'Pts';
		$strings['DayTuesdayAbbr'] = 'Sal';
		$strings['DayWednesdayAbbr'] = 'Çar';
		$strings['DayThursdayAbbr'] = 'Per';
		$strings['DayFridayAbbr'] = 'Cum';
		$strings['DaySaturdayAbbr'] = 'Cts';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Your Reservation Has Been Approved';
		$strings['ReservationCreatedSubject'] = 'Your Reservation Was Created';
		$strings['ReservationUpdatedSubject'] = 'Your Reservation Was Updated';
		$strings['ReservationDeletedSubject'] = 'Your Reservation Was Removed';
		$strings['ReservationCreatedAdminSubject'] = 'Notification: A Reservation Was Created';
		$strings['ReservationUpdatedAdminSubject'] = 'Notification: A Reservation Was Updated';
		$strings['ReservationDeleteAdminSubject'] = 'Notification: A Reservation Was Removed';
		$strings['ReservationApprovalAdminSubject'] = 'Notification: Reservation Requires Your Approval';
		$strings['ParticipantAddedSubject'] = 'Reservation Participation Notification';
		$strings['ParticipantDeletedSubject'] = 'Reservation Removed';
		$strings['InviteeAddedSubject'] = 'Reservation Invitation';
		$strings['ResetPassword'] = 'Password Reset Request';
		$strings['ActivateYourAccount'] = 'Please Activate Your Account';
		$strings['ReportSubject'] = 'Your Requested Report (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Reservation for %s is starting soon';
		$strings['ReservationEndingSoonSubject'] = 'Reservation for %s is ending soon';
		$strings['UserAdded'] = 'A new user has been added';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = array();

		/***
		DAY NAMES
		All of these arrays MUST start with Sunday as the first element
		and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
		// The three letter abbreviation
		$days['abbr'] = array('Paz', 'Pts', 'Sal', 'Çarş', 'Per', 'Cum', 'Cts');
		// The two letter abbreviation
		$days['two'] = array('Pa', 'Pt', 'Sa', 'Ça', 'Pe', 'Cu', 'Ct');
		// The one letter abbreviation
		$days['letter'] = array('P', 'P', 'S', 'Ç', 'P', 'C', 'C');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		MONTH NAMES
		All of these arrays MUST start with January as the first element
		and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
		// The three letter month name
		$months['abbr'] = array('Ock', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağs', 'Eyl', 'Ekm', 'Kas', 'Ara');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'Ç','D', 'E', 'F', 'G','Ğ', 'H','İ', 'I', 'J', 'K', 'L', 'M', 'N', 'O','Ö', 'P', 'Q', 'R', 'S','Ş' ,'T', 'U','Ü', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'tr';
	}
}

?>