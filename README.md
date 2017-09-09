# alexander-dubois
A personal portfolio website for myself, Alex.

## Milestone 1 feedback

Your directory structure, gitignore and code look great! You get a green stamp of approval from [W3 Validator](https://validator.w3.org/nu/?acceptlanguage=&doc=https%3A%2F%2Fbootcamp-coders.cnm.edu%2F~adubois2%2Falexander-dubois%2Fpublic_html%2Fdocumentation%2Fmilestone-1.php), which is always good to check before pushing code to production.

Your descriptions for use case, persona and goals are thorough and specific, which will help tremendously when it comes time to create your wireframes.

Something to be aware of going forward is your use of the `<strong>` tags. This is typically only used for semantic purposes, and not styling purposes. Going forward it's typically better to use a `<span>` tag with a class or id to style text. Of course, if you want to draw attention to text specifically to get a point across to someone using a screen reader or just viewing your site, the `<strong>` tag is perfectly fine.

You've done a great job on milestone 1, and pass with a [tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)! You're clear to begin working on [milestone 2a](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/).

## Milestone 2a feedback

Your directory structure continues to look great, and your HTML has passed the W3 Validator again. Great job!

Your description helped clarify that you'll be putting all your content on one page. That wasn't immediately apparent from your wireframes, but to be fair I read your description after looking at the wireframes. I noticed that your mobile wireframes don't include overlaying the content on your clickable buttons, but your desktop wireframes include the overlay. Is this how you want the final product to behave? That's great if that's how you want it to behave, but you never specifically stated either way. Also, how is the end user going to get back to the original menu?

I really like your idea for PWP, and I can't wait for this to take shape. You pass with a [tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). **However** I would like you to clarify both questions above before moving on to [milestone 2b](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/). Let me know if you have any questions.

## Milestone 2b
Your Milestone 3 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

## PWP Milestone 3 Feedback
Nice job getting this very custom idea implemented successfully by the due date - this was a more challenging concept,  and it's great that you stuck by your initial vision.

Your form appears to be working correctly - check your email and see if you received my test message.

Some minor additions and adjustments in style would give this project a more professional polish. Try playing around with a visually engaging background image for instance. And perhaps the addition of a custom typeface on certain headings. You don't even necessarily need to use color - you could keep everything monochrome and still be very visually engaging. These small adjustments could make a big difference visually. I've listed some suggestions you could experiment with below.  

Your Milestone 3 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

Your overall grade across all of your PWP Milestones is 28/40 points (70%).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier IV 40(0.2) = 8
- Milestone 2b - 10%: Tier II 20(0.1) = 2
- Milestone 3 - 50%: Tier II 20(0.5) = 10

### Edits &amp; Suggestions
- I noticed the flex layout rules I suggested still aren't quite right. Try adding the following rule to get that main section centered properly:
```
section.section-main {
    width: 100%;
}
```  
- the `aria-labelledby` attribute needs to point to the id of the modal heading (`<h4>` tags) to be correctly used.
- the `for` attribute on `<label>` tags needs to point to the id of the form `<input>` it belongs to in order to be correct.
- Remove scripts.js if it's not serving any purpose
- Try using modal-lg on the resume window... that really helps readability.
- I also recommend not making the modal close and social media buttons so big - this isn't a professional look.
- I would simplify the Resume formatting for a cleaner look and greater layout compatibility across breakpoints.
- You can remove the default animation from the modals, then add your own custom CSS transitions via class if you wanted to. See here: https://getbootstrap.com/docs/3.3/javascript/#modals-remove-animation
- Modal body structure is a bit off in certain places - esp on Resume window. You don't need to place a container in the modal, for example. Inspecting these windows in devtools reveals some formatting inconsistencies that can be solved with the correct element and class structure. For instance - on the Resume window remove the `container-fluid` class and use a `modal-body` section to house the content underneath the modal-header for a better fit.
 - Remove the custom margins on `modal-header` class - this messes the layout up a bit.
