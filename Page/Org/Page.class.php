<?
class Page{
	
	Public $CPage;

	Public $PageSize;

	Public $RecordCount;

	public function __construct(){
		$this->CPage=1;
		$page = $_GET['page'];
		if(isset($page)&&is_numeric($page)){
			$this->CPage=$page;
		}
		$this->PageSize=0;
		$this->RecordCount=0;
	}

	public function pagehtml($param=''){
		$url = $_SERVER['REQUEST_URI'];
		if ($param != "")
            $url .= "".$param;
        $cpage = $this->CPage;
        $pagesize = $this->PageSize;
        $recordcount = $this->RecordCount;
        if (strpos($url,"?") >0)
            $url.= "&page=";
        else
            $url.= "?page=";
        $pagecount = intval($recordcount / $pagesize);
        if ($recordcount % $pagesize != 0)
            $pagecount++;
        if ($recordcount == 0)
        {
            echo "<a class='a1'>没有记录！！</a>";
            return;
        }
        if ($pagecount <= 1)
            echo "当前共有<span style='color:#ff0000;'>".$recordcount."</span>个记录";
        else
        {
            if ($cpage > 1)
            {
                echo "<a href='".$url."1'>首页</a>";
                echo "<a href='".$url.($cpage - 1)."'>&nbsp;&nbsp;上一页</a>";
            }
            else
                echo "<span style='color:Gray'>首页 &nbsp;&nbsp;上一页</span>";
            if ($cpage < $pagecount)
            {
                echo "<a href='".$url.($cpage + 1)."'>&nbsp;&nbsp;下一页</a>";
                echo "<a href='".$url.$pagecount."'>&nbsp;&nbsp;最后一页</a>&nbsp;&nbsp;";
            }
            else
                echo "<span style='color:Gray'>&nbsp;&nbsp;下一页&nbsp;&nbsp;最后一页</span>";
            echo "&nbsp;&nbsp;页次：".$cpage."/".$pagecount." <span style='color:#ff0000;'>".$pagesize."</span>个记录/页";
            echo "&nbsp;&nbsp;共有<span style='color:#ff0000;'>".$recordcount."</span>条记录";
            //$list = "&nbsp;&nbsp;转到第&nbsp;<select onChange='_gourl(this)'>";
            //for ($l = 1; $l <= $pagecount; $l++)
            //{
            //   $list.= "<option value='".$l."'";
            //    if ($cpage == $l)
            //        $list.= " selected";
            //    $list.= ">".$l."</option>"; ;
            //}
            //$list.= "</select>页";
            //$list.= "<script>function _gourl(ob){location.href='".$url."'+ob.options[ob.selectedIndex].value;}</script>";
            echo $list;
        }
	}

	public function ajaxhtml($script='page'){
		$url = $script;
		$cpage = $this->CPage;
        $pagesize = $this->PageSize;
        $recordcount = $this->RecordCount;
        $pagecount = intval($recordcount / $pagesize);
        if ($recordcount % $pagesize != 0)
            $pagecount++;
        if ($recordcount == 0)
        {
            echo "<a class='a1'>没有记录！！</a>";
            return;
        }
        if ($pagecount <= 1)
            echo "当前共有<span>".$recordcount."</span>个记录";
        else
        {
            if ($cpage > 1)
            {
                echo "<a href='javascript:".$url."(1)'>首页</a>";
                echo "<a href='javascript:".$url."(".($cpage - 1).")'>&nbsp;&nbsp;上一页</a>";
            }
            else
                echo "<span style='color:Gray'>首页 &nbsp;&nbsp;上一页</span>";
            if ($cpage < $pagecount)
            {
                echo "<a href='javascript:".$url."(".($cpage + 1).")'>&nbsp;&nbsp;下一页</a>";
                echo "<a href='javascript:".$url."(".$pagecount.")'>&nbsp;&nbsp;最后一页</a>&nbsp;&nbsp;";
            }
            else
                echo "<span style='color:Gray'>&nbsp;&nbsp;下一页&nbsp;&nbsp;最后一页</span>";
            echo "&nbsp;&nbsp;页次：".$cpage."/".$pagecount." <span style='color:#ff0000;'>".$pagesize."</span>个记录/页";
            echo "&nbsp;&nbsp;共有<span style='color:#ff0000;'>".$recordcount."</span>条记录";
            echo $list;
        }
	}

}
?>