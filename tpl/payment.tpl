{*
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
*}

{include file='globalheader.tpl' cssFiles='css/dashboard.css,css/jquery.qtip.min.css'}
<div class="paymentsection">
<div class="paymentinfo">
<h3>Merhaba {$Name}</h3>
    <p>
        Yelken eğitimi rezervasyonları, kredi sistemi ile yapılmaktadır. Yaptığınız ödeme sonucu hesabınıza 12 saat eğitim ve 1 iptal hakkı tanımlanacaktır.
        Haftalık eğitimlerin süresi 2 saattir.
        Eğitimin hava şartları nedeniyle erken bitmesi veya iptal olması durumunda eğitim yapılmayan saatler, eğitim koordinatörleri tarafından hesabınıza eklenecektir.
    </p>
    <br>
    <p>
        <label>Mevcut eğitim hakkınız: {$TrainingCredit} saat</label>
        <br>
        <label>Eğitim tipiniz: {$UserTrainingType}</label>
        <br>
        <label>Eğitim seviyeniz: {$UserTrainingLevel}</label>
        <br>
        <br>
        {$UserTrainingLevel|lower} seviyesinde {$UserTrainingType|lower} yelken eğitimleri için 12 saatlik eğitim ücreti {$Price} TL'dir.
        Aşağıdaki "Şimdi Öde" butonuna tıklayarak ödeme işleminizi gerçekleştirebilirsiniz.
    </p>


</div>
{*<h3>{$UserTrainingType}</h3>*}
{*<h3>{$UserTrainingLevel}</h3>*}
{*<h3>{$Price}</h3>*}
<div class="PayU" align="center">
{$PayU}
</div>
</div>
{include file='globalfooter.tpl'}