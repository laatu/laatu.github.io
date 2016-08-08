package learn;

import org.springframework.boot.autoconfigure.web.WebMvcAutoConfiguration;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

@Controller	
public class Contro  extends WebMvcAutoConfiguration {
	@RequestMapping("/hello")
	public ModelAndView helloworld(){
		ModelAndView mview=new ModelAndView("Hell");
		mview.addObject("msg","Message is this");
		return mview;				
	}
	
	
	@RequestMapping("/fil")
	@ResponseBody
	public String home(){
		return "This  fil was to check this Controller file was loaded or not";
	}
	

}
