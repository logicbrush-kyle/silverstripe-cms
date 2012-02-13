<?php

/**
 * Chinese (Taiwan) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('zh_TW', $lang) && is_array($lang['zh_TW'])) {
	$lang['zh_TW'] = array_merge($lang['en_US'], $lang['zh_TW']);
} else {
	$lang['zh_TW'] = $lang['en_US'];
}

$lang['zh_TW']['AssetAdmin']['CHOOSEFILE'] = '選擇檔案';
$lang['zh_TW']['AssetAdmin']['DELETEDX'] = '刪除 %s 檔案. %s';
$lang['zh_TW']['AssetAdmin']['FILESREADY'] = '可以上傳的檔案：';
$lang['zh_TW']['AssetAdmin']['MENUTITLE'] = '檔案和圖片';
$lang['zh_TW']['AssetAdmin']['MOVEDX'] = '移動 %s 檔案';
$lang['zh_TW']['AssetAdmin']['NEWFOLDER'] = '新資料夾';
$lang['zh_TW']['AssetAdmin']['NOTEMP'] = '找不到檔案上傳的暫存資料夾。請在 php.ini 設定 upload_tmp_dir';
$lang['zh_TW']['AssetAdmin']['NOTHINGTOUPLOAD'] = '沒有檔案可以上傳';
$lang['zh_TW']['AssetAdmin']['NOWBROKEN'] = '下列的網頁含有失效的連結：';
$lang['zh_TW']['AssetAdmin']['SAVEDFILE'] = '儲存檔案 %s';
$lang['zh_TW']['AssetAdmin']['SAVEFOLDERNAME'] = '儲存資料夾名稱';
$lang['zh_TW']['AssetAdmin']['UPLOAD'] = '上傳下列檔案';
$lang['zh_TW']['AssetAdmin']['UPLOADEDX'] = '已上傳了 %s 檔案';
$lang['zh_TW']['AssetAdmin_left.ss']['CREATE'] = '建立';
$lang['zh_TW']['AssetAdmin_left.ss']['DELETE'] = '刪除';
$lang['zh_TW']['AssetAdmin_left.ss']['DELFOLDERS'] = '刪除已選擇的檔案';
$lang['zh_TW']['AssetAdmin_left.ss']['FOLDERS'] = '資料夾';
$lang['zh_TW']['AssetAdmin_left.ss']['GO'] = '執行';
$lang['zh_TW']['AssetAdmin_left.ss']['SELECTTODEL'] = '選擇要刪除的檔案並點擊按鈕';
$lang['zh_TW']['AssetAdmin_left.ss']['TOREORG'] = '拖拽資料夾即可排序';
$lang['zh_TW']['AssetAdmin_right.ss']['CHOOSEPAGE'] = '請從左邊選擇一個網頁';
$lang['zh_TW']['AssetAdmin_right.ss']['WELCOME'] = '歡迎來到';
$lang['zh_TW']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = '抱歉，您沒有權力上傳檔案到這個資料夾。';
$lang['zh_TW']['AssetTableField']['CREATED'] = '第一次上傳';
$lang['zh_TW']['AssetTableField']['DIM'] = '尺寸';
$lang['zh_TW']['AssetTableField']['FILENAME'] = '檔案名稱';
$lang['zh_TW']['AssetTableField']['LASTEDIT'] = '最後一次更新';
$lang['zh_TW']['AssetTableField']['NOLINKS'] = '沒有連結到這個檔案。';
$lang['zh_TW']['AssetTableField']['OWNER'] = '擁有者';
$lang['zh_TW']['AssetTableField']['PAGESLINKING'] = '下列的網頁連結到這個檔案：';
$lang['zh_TW']['AssetTableField']['SIZE'] = '大小';
$lang['zh_TW']['AssetTableField.ss']['DELFILE'] = '刪除這個檔案';
$lang['zh_TW']['AssetTableField.ss']['DRAGTOFOLDER'] = '拖拽到左邊的資料夾即可移動';
$lang['zh_TW']['AssetTableField']['TITLE'] = '標題';
$lang['zh_TW']['AssetTableField']['TYPE'] = '類型';
$lang['zh_TW']['CMSMain']['CANCEL'] = '取消';
$lang['zh_TW']['CMSMain']['CHOOSEREPORT'] = '(選擇報告)';
$lang['zh_TW']['CMSMain']['COMPARINGV'] = '您正在比較第%d版與第%d版';
$lang['zh_TW']['CMSMain']['COPYPUBTOSTAGE'] = '您真的要將已發布的內容複製到預備發布站嗎？';
$lang['zh_TW']['CMSMain']['EMAIL'] = '電子郵件';
$lang['zh_TW']['CMSMain']['GO'] = '執行';
$lang['zh_TW']['CMSMain']['MENUTITLE'] = '網站內容';
$lang['zh_TW']['CMSMain']['METADESCOPT'] = '敘述';
$lang['zh_TW']['CMSMain']['METAKEYWORDSOPT'] = '關鍵字';
$lang['zh_TW']['CMSMain']['NEW'] = '新增';
$lang['zh_TW']['CMSMain']['NOCONTENT'] = '沒有內容';
$lang['zh_TW']['CMSMain']['NOTHINGASSIGNED'] = '目前沒有任務分配給您。';
$lang['zh_TW']['CMSMain']['NOWAITINGON'] = '您並沒有在等其他人做出動作。';
$lang['zh_TW']['CMSMain']['NOWBROKEN'] = '下列的網頁含有失效的連結：';
$lang['zh_TW']['CMSMain']['NOWBROKEN2'] = '它們的編輯者已被通知，他們將修復那些網頁。';
$lang['zh_TW']['CMSMain']['OK'] = '是';
$lang['zh_TW']['CMSMain']['PAGEDEL'] = '%d 已被刪除';
$lang['zh_TW']['CMSMain']['PAGENOTEXISTS'] = '這頁不存在';
$lang['zh_TW']['CMSMain']['PAGEPUB'] = '%d 已被發布';
$lang['zh_TW']['CMSMain']['PAGESDEL'] = '%d 已被刪除';
$lang['zh_TW']['CMSMain']['PAGESPUB'] = '%d 已被發布';
$lang['zh_TW']['CMSMain']['PAGETYPEOPT'] = '網頁類型';
$lang['zh_TW']['CMSMain']['PRINT'] = '列印';
$lang['zh_TW']['CMSMain']['PUBALLCONFIRM'] = '請發布所有網頁';
$lang['zh_TW']['CMSMain']['PUBALLFUN'] = '"全部發布" 功能';
$lang['zh_TW']['CMSMain']['PUBALLFUN2'] = '按下這個按鈕就是如同到每頁按「發布」。當有很多內容更變時，這個功能可以省時。';
$lang['zh_TW']['CMSMain']['PUBPAGES'] = '完成：共發布了%頁';
$lang['zh_TW']['CMSMain']['REMOVEDFD'] = '成功的從預備發布站移除';
$lang['zh_TW']['CMSMain']['REMOVEDPAGE'] = '成功的從正式發布站移除 「%s」';
$lang['zh_TW']['CMSMain']['RESTORED'] = '復原 \'%s\'  成功';
$lang['zh_TW']['CMSMain']['ROLLBACK'] = '回複到這個的版本';
$lang['zh_TW']['CMSMain']['ROLLEDBACKPUB'] = '成功的回複到正式發布的版本。新的版本號是%d。';
$lang['zh_TW']['CMSMain']['ROLLEDBACKVERSION'] = '成功的回複到第%d版。新的版本號是%d。';
$lang['zh_TW']['CMSMain']['SAVE'] = '儲存';
$lang['zh_TW']['CMSMain']['SENTTO'] = '已傳送給 %s %s 批准。';
$lang['zh_TW']['CMSMain']['STATUSOPT'] = '狀態';
$lang['zh_TW']['CMSMain']['TOTALPAGES'] = '總頁數：';
$lang['zh_TW']['CMSMain']['VERSIONSNOPAGE'] = '找不到網頁的第%d版';
$lang['zh_TW']['CMSMain']['VIEWING'] = '您正在瀏覽 %s 建立的第%d版';
$lang['zh_TW']['CMSMain']['VISITRESTORE'] = '瀏覽restorepage/(ID)';
$lang['zh_TW']['CMSMain']['WAITINGON'] = '您正在等其他人對下列的網頁做出動作：<b>%d</b>。';
$lang['zh_TW']['CMSMain']['WORKTODO'] = '您需要對下列的網頁做出動作：<b>%d</b>。';
$lang['zh_TW']['CMSMain_left.ss']['ADDEDNOTPUB'] = '新增至預備發布站但尚未發布。';
$lang['zh_TW']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = '新增搜尋範圍';
$lang['zh_TW']['CMSMain_left.ss']['BATCHACTIONS'] = '整批處理';
$lang['zh_TW']['CMSMain_left.ss']['CHANGED'] = '已變更';
$lang['zh_TW']['CMSMain_left.ss']['CLOSEBOX'] = '點擊以關閉這個區塊';
$lang['zh_TW']['CMSMain_left.ss']['COMPAREMODE'] = '比較模式(點選兩個)';
$lang['zh_TW']['CMSMain_left.ss']['CREATE'] = '建立';
$lang['zh_TW']['CMSMain_left.ss']['DEL'] = '已刪除';
$lang['zh_TW']['CMSMain_left.ss']['DELETECONFIRM'] = '刪除已選擇的網頁';
$lang['zh_TW']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = '從預備發布站刪除但還在正式發布站上。';
$lang['zh_TW']['CMSMain_left.ss']['EDITEDNOTPUB'] = '編輯至預備發布站但尚未發布。';
$lang['zh_TW']['CMSMain_left.ss']['EDITEDSINCE'] = '自從上次編輯';
$lang['zh_TW']['CMSMain_left.ss']['ENABLEDRAGGING'] = '允許拖拽排序';
$lang['zh_TW']['CMSMain_left.ss']['GO'] = '執行';
$lang['zh_TW']['CMSMain_left.ss']['KEY'] = '圖標：';
$lang['zh_TW']['CMSMain_left.ss']['NEW'] = '新的';
$lang['zh_TW']['CMSMain_left.ss']['OPENBOX'] = '點擊以打開這個區塊';
$lang['zh_TW']['CMSMain_left.ss']['PAGEVERSIONH'] = '網頁版本紀錄';
$lang['zh_TW']['CMSMain_left.ss']['PUBLISHCONFIRM'] = '發布已選擇的網頁';
$lang['zh_TW']['CMSMain_left.ss']['SEARCH'] = '搜尋';
$lang['zh_TW']['CMSMain_left.ss']['SEARCHTITLE'] = '搜索URL(路徑)、標題、選單標題、內容';
$lang['zh_TW']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = '選擇您要變更的網頁並點擊一個動作：';
$lang['zh_TW']['CMSMain_left.ss']['SHOWONLYCHANGED'] = '只顯示被變更的網頁';
$lang['zh_TW']['CMSMain_left.ss']['SHOWUNPUB'] = '顯示尚未發布的版本';
$lang['zh_TW']['CMSMain_left.ss']['SITECONTENT TITLE'] = '網站內容及架構';
$lang['zh_TW']['CMSMain_left.ss']['SITEREPORTS'] = '網站報告';
$lang['zh_TW']['CMSMain_right.ss']['ANYMESSAGE'] = '對您的編輯有什麼話嗎？';
$lang['zh_TW']['CMSMain_right.ss']['CHOOSEPAGE'] = '請從左邊選擇一個網頁。';
$lang['zh_TW']['CMSMain_right.ss']['LOADING'] = '載入中...';
$lang['zh_TW']['CMSMain_right.ss']['MESSAGE'] = '訊息';
$lang['zh_TW']['CMSMain_right.ss']['SENDTO'] = '傳送給';
$lang['zh_TW']['CMSMain_right.ss']['STATUS'] = '狀態';
$lang['zh_TW']['CMSMain_right.ss']['SUBMIT'] = '提交以被核准';
$lang['zh_TW']['CMSMain_right.ss']['WELCOMETO'] = '歡迎來到';
$lang['zh_TW']['CMSMain_versions.ss']['AUTHOR'] = '作者';
$lang['zh_TW']['CMSMain_versions.ss']['NOTPUB'] = '尚未發布';
$lang['zh_TW']['CMSMain_versions.ss']['PUBR'] = '發布者';
$lang['zh_TW']['CMSMain_versions.ss']['UNKNOWN'] = '不知';
$lang['zh_TW']['CMSMain_versions.ss']['WHEN'] = '上一次被編輯';
$lang['zh_TW']['CommentAdmin']['MENUTITLE'] = '留言';
$lang['zh_TW']['CommentList.ss']['CREATEDW'] = '當被發布、退回、或送出時，留言將會被建立。';
$lang['zh_TW']['CommentList.ss']['NOCOM'] = '這頁沒有留言。';
$lang['zh_TW']['ImageEditor.ss']['CANCEL'] = '取消';
$lang['zh_TW']['ImageEditor.ss']['CROP'] = '剪輯';
$lang['zh_TW']['ImageEditor.ss']['HEIGHT'] = '高';
$lang['zh_TW']['ImageEditor.ss']['REDO'] = '還原';
$lang['zh_TW']['ImageEditor.ss']['ROT'] = '旋轉';
$lang['zh_TW']['ImageEditor.ss']['SAVE'] = '儲存圖片';
$lang['zh_TW']['ImageEditor.ss']['UNDO'] = '復原';
$lang['zh_TW']['ImageEditor.ss']['UNTITLED'] = '無標題的文件';
$lang['zh_TW']['ImageEditor.ss']['WIDTH'] = '寬';
$lang['zh_TW']['LeftAndMain']['CHANGEDURL'] = '網址已被改成「%s」';
$lang['zh_TW']['LeftAndMain']['HELP'] = '說明';
$lang['zh_TW']['LeftAndMain']['PAGETYPE'] = '網頁類型：';
$lang['zh_TW']['LeftAndMain']['PERMAGAIN'] = '您已被登出，請在下面重新登入。';
$lang['zh_TW']['LeftAndMain']['PERMALREADY'] = '抱歉，您沒有權力使用這個部分。您可以用別的帳號登入。';
$lang['zh_TW']['LeftAndMain']['PERMDEFAULT'] = '請選擇一個認證方法並登入。';
$lang['zh_TW']['LeftAndMain']['PLEASESAVE'] = '請儲存：這個網頁沒有被更新因為尚未被儲存。';
$lang['zh_TW']['LeftAndMain']['REQUESTERROR'] = '發生了錯誤';
$lang['zh_TW']['LeftAndMain']['SAVED'] = '已儲存';
$lang['zh_TW']['LeftAndMain']['SAVEDUP'] = '已儲存';
$lang['zh_TW']['LeftAndMain']['SITECONTENTLEFT'] = '網站內容';
$lang['zh_TW']['LeftAndMain.ss']['APPVERSIONTEXT1'] = '您目前所執行的';
$lang['zh_TW']['LeftAndMain.ss']['APPVERSIONTEXT2'] = '版本是CVS branch。';
$lang['zh_TW']['LeftAndMain.ss']['ARCHS'] = '已歸檔站';
$lang['zh_TW']['LeftAndMain.ss']['DRAFTS'] = '預備發布站';
$lang['zh_TW']['LeftAndMain.ss']['EDIT'] = '編輯';
$lang['zh_TW']['LeftAndMain.ss']['EDITPROFILE'] = '個人資料';
$lang['zh_TW']['LeftAndMain.ss']['LOADING'] = '載入中...';
$lang['zh_TW']['LeftAndMain.ss']['LOGGEDINAS'] = '登入為';
$lang['zh_TW']['LeftAndMain.ss']['LOGOUT'] = '登出';
$lang['zh_TW']['LeftAndMain.ss']['PUBLIS'] = '正式發布站';
$lang['zh_TW']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe網站';
$lang['zh_TW']['LeftAndMain.ss']['VIEWPAGEIN'] = '網頁瀏覽：';
$lang['zh_TW']['LeftAndMain']['STATUSTO'] = '狀態改變為「%s」';
$lang['zh_TW']['LeftAndMain']['TREESITECONTENT'] = '網站內容';
$lang['zh_TW']['MemberList.ss']['FILTER'] = '篩選';
$lang['zh_TW']['MemberList_Table.ss']['EMAIL'] = '電子郵件';
$lang['zh_TW']['MemberList_Table.ss']['FN'] = '名';
$lang['zh_TW']['MemberList_Table.ss']['PASSWD'] = '密碼';
$lang['zh_TW']['MemberList_Table.ss']['SN'] = '姓';
$lang['zh_TW']['MemberTableField']['ADD'] = '新增';
$lang['zh_TW']['MemberTableField']['ADDEDTOGROUP'] = '已加入到群組';
$lang['zh_TW']['MemberTableField.ss']['ADDNEW'] = '新增';
$lang['zh_TW']['MemberTableField.ss']['DELETEMEMBER'] = '刪除這個會員';
$lang['zh_TW']['MemberTableField.ss']['EDITMEMBER'] = '編輯這個會員';
$lang['zh_TW']['MemberTableField.ss']['SHOWMEMBER'] = '顯示這個會員';
$lang['zh_TW']['PageComment']['COMMENTBY'] = '%s 在 %s 發表的留言';
$lang['zh_TW']['PageCommentInterface.ss']['COMMENTS'] = '留言';
$lang['zh_TW']['PageCommentInterface.ss']['NEXT'] = '下一個';
$lang['zh_TW']['PageCommentInterface.ss']['NOCOMMENTSYET'] = '尚未有人留言。';
$lang['zh_TW']['PageCommentInterface.ss']['POSTCOM'] = '寫留言';
$lang['zh_TW']['PageCommentInterface.ss']['PREV'] = '上一個';
$lang['zh_TW']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = '這不是垃圾';
$lang['zh_TW']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = '這是垃圾';
$lang['zh_TW']['PageCommentInterface_singlecomment.ss']['PBY'] = '作者：';
$lang['zh_TW']['PageCommentInterface_singlecomment.ss']['REMCOM'] = '移除這個留言';
$lang['zh_TW']['ReportAdmin_left.ss']['REPORTS'] = '報告';
$lang['zh_TW']['ReportAdmin_right.ss']['WELCOME1'] = '歡迎來到';
$lang['zh_TW']['ReportAdmin_right.ss']['WELCOME2'] = '報告管理：請選擇左邊的一個報告';
$lang['zh_TW']['ReportAdmin_SiteTree.ss']['REPORTS'] = '報告';
$lang['zh_TW']['SecurityAdmin']['ADDMEMBER'] = '新增會員';
$lang['zh_TW']['SecurityAdmin']['MENUTITLE'] = '權限管理';
$lang['zh_TW']['SecurityAdmin']['NEWGROUP'] = '新增群組';
$lang['zh_TW']['SecurityAdmin']['SAVE'] = '儲存';
$lang['zh_TW']['SecurityAdmin']['SGROUPS'] = '用戶權限群組';
$lang['zh_TW']['SecurityAdmin_left.ss']['CREATE'] = '新增';
$lang['zh_TW']['SecurityAdmin_left.ss']['DEL'] = '刪除';
$lang['zh_TW']['SecurityAdmin_left.ss']['DELGROUPS'] = '刪除已選擇的群组並點擊按鈕';
$lang['zh_TW']['SecurityAdmin_left.ss']['GO'] = '執行';
$lang['zh_TW']['SecurityAdmin_left.ss']['SECGROUPS'] = '安全權限群组';
$lang['zh_TW']['SecurityAdmin_left.ss']['SELECT'] = '選擇您要刪除的網頁並點擊按鈕';
$lang['zh_TW']['SecurityAdmin_left.ss']['TOREORG'] = '拖拽網頁即可排序';
$lang['zh_TW']['SecurityAdmin_right.ss']['WELCOME1'] = '歡迎來到';
$lang['zh_TW']['SecurityAdmin_right.ss']['WELCOME2'] = '安全權限管理：請選擇左邊的一個群组';
$lang['zh_TW']['SideReport']['EMPTYPAGES'] = '空頁';
$lang['zh_TW']['SideReport']['LAST2WEEKS'] = '網頁在過去兩個禮拜有被更改過';
$lang['zh_TW']['SideReport']['REPEMPTY'] = '這份 %s 報告是空的。';
$lang['zh_TW']['StaticExporter']['BASEURL'] = '基本網址';
$lang['zh_TW']['StaticExporter']['EXPORTTO'] = '匯出至那個資料夾';
$lang['zh_TW']['StaticExporter']['FOLDEREXPORT'] = '資料夾匯出至';
$lang['zh_TW']['StaticExporter']['NAME'] = '網站靜態匯出';
$lang['zh_TW']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(請選擇上面的一個資料夾)';
$lang['zh_TW']['ViewArchivedEmail.ss']['CANACCESS'] = '您可以利用哲格連結到已歸檔站：';
$lang['zh_TW']['ViewArchivedEmail.ss']['HAVEASKED'] = '您要瀏覽這一天的網站內容：';
$lang['zh_TW']['WaitingOn.ss']['ATO'] = '配給';

