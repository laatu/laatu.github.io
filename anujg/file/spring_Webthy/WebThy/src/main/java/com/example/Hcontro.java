package com.example;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.boot.autoconfigure.EnableAutoConfiguration;
import org.springframework.boot.autoconfigure.web.WebMvcAutoConfiguration;
import org.springframework.stereotype.*;


@Controller	
public class Hcontro {//extends WebMvcAutoConfiguration{
	@RequestMapping("/")
	@ResponseBody
	public String gethome()
	{
		//return "Hi may name is anuj by WebThy";
		return "response body of WebThy yap!";
	}
	
	@RequestMapping(value="/gree",method = RequestMethod.GET)//,method=Request
    public @ResponseBody String greeting(@RequestParam(value="name", required=false, defaultValue="World") String name, Model model) {
        model.addAttribute("name", name);
        return "greeting "+name;
	}

	@RequestMapping(value="/Fileop",method = RequestMethod.GET)//,method=Request
	public String getfileo(@RequestParam(value="name", required=false, defaultValue="World") String name, Model model) {
        model.addAttribute("name", name);
        return "Fileop";
	}
	
	@RequestMapping(value="/home",method = RequestMethod.GET)//,method=Request
	public String geHome(@RequestParam(value="name", required=false, defaultValue="World") String name, Model model) {
        model.addAttribute("name", name);
        return "Home";
	}
}
