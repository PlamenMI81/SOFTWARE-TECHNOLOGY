package app.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import java.io.File;

@Controller
public class FilesController {
    @RequestMapping("/files")
    public String files(@RequestParam(value="file", defaultValue = "")String file,Model model) {
        File path = new File(file);
        File[] allFiles =  path.listFiles();
        model.addAttribute("allFiles", allFiles);
        return "files";
    }

}
