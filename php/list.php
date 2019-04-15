<?PHP

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  class ListBuilder
  {

    private $list = [];

    public function contains($val)
    {
      return in_array($val, $this->list);
    }

    public function add($val)
    {
      if(!$this->contains($val)) {
        $this->list[] = $val;
      }
    }

    public function get()
    {
      return $this->list;
    }

  }
?>