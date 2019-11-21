var ps =["1.png","2.png","4.png","6.png",];
var pi =["7.png","8.png","9.png"];
var pos=0;

function cambiarPS(direccion)
{
  if(direccion==1)
  {
    if(pos==0)
    {
    $$("#izquierda").attr("display", "none");
		}
		else{
		pos--;
		$("#ps").attr("src" ,"imgMK/"+ps[pos]);
		}

	}
	else
	{
		if (pos < (ps.length-1))
		{
			pos++;
			$("#ps").attr("src", "imgMK/"+ps[pos]);

		}
		else{
			$("#derecha").attr("display", "none");

		}
	}
    }
  }
}
function cambiarPI(direccion)
{
  if(direccion==1)
  {
    if(pos==0)
    {
    $$("#izquierda").attr("display", "none");
		}
		else{
		pos--;
		$("#pi").attr("src" ,"imgMK/"+pi[pos]);
		}

	}
	else
	{
		if (pos < (pi.length-1))
		{
			pos++;
			$("#pi").attr("src", "imgMK/"+pi[pos]);

		}
		else{
			$("#derecha").attr("display", "none");

		}
	}
    }
  }
}
