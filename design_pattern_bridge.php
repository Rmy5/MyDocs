<?php
	
	// INTERFACE BRIDGE

	abstract class BridgeBook {

	    private $bbAuthor;
	    private $bbTitle;
	    private $bbImp;
	    function __construct($author_in, $title_in, $choice_in) {

		      $this->bbAuthor = $author_in;
		      $this->bbTitle  = $title_in;

		      if ('STARS' == $choice_in) {
		     	    $this->bbImp = new BridgeBookStarsImp();
		      } 

		      else {
		       		$this->bbImp = new BridgeBookCapsImp();
		      }
	    } 

	    function showAuthor() {

	      return $this->bbImp->showAuthor($this->bbAuthor);

	    }

	    function showTitle() {

	      return $this->bbImp->showTitle($this->bbTitle);

	    }
	}







	class BridgeBookAuthorTitle extends BridgeBook { 

	    function showAuthorTitle(){

	      return $this->showAuthor() . "'s " . $this->showTitle();

	    }
	} 






	class BridgeBookTitleAuthor extends BridgeBook {   

	    function showTitleAuthor(){

	      return $this->showTitle() . ' by ' . $this->showAuthor();

	    }
	}






	abstract class BridgeBookImp {   

	    abstract function showAuthor($author);
	    abstract function showTitle($title);

	}





	class BridgeBookCapsImp extends BridgeBookImp { 

	    function showAuthor($author_in) {

	      return strtoupper($author_in); 

	    }

	    function showTitle($title_in) {

	      return strtoupper($title_in);

	    }
	}






	class BridgeBookStarsImp extends BridgeBookImp {  

	    function showAuthor($author_in) {

	      return Str_replace(" ","*",$author_in); 

	    }

	    function showTitle($title_in) {

	      return Str_replace(" ","*",$title_in); 

	    }
	}

	$livre = new 


	


https://sourcemaking.com/design_patterns/bridge/php
?>