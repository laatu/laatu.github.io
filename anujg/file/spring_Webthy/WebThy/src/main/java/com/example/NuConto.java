package com.example;

import java.util.Arrays;

import org.springframework.boot.autoconfigure.web.WebMvcAutoConfiguration;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;
	
@Controller
//extends WebMvcAutoConfiguration
//add this in class if ****SuperHeros is not working
public class NuConto  extends WebMvcAutoConfiguration{
	@RequestMapping("/superhero")
	public ModelAndView getSuperheroes() {
	//return new ModelAndView(View view, String modelName, Object modelObject)
	  return new ModelAndView("superheroes", "superheroes", Arrays.asList(
	     new Superhero("Clark", "Kent", "Superman", true),
	     new Superhero("Siobhan", "McDougal", "Silver Banshee", false)
	  ));
	}
	
	@RequestMapping("/jil")
	@ResponseBody
	public String home(){
		return "This was to check this Controller file was loaded or not";
	}

}
