from PIL import Image

# Open images
outline = Image.open('images/indiana-outline.png').convert("RGBA")
torch = Image.open('images/torch-music-notes.png').convert("RGBA")

# Resize the torch to be a bit larger than the outline
# Let's say outline is 1024x1024. Let's make torch 1200x1180
# Torch aspect ratio is 6246 / 6144 = 1.016
torch_w = int(outline.width * 1.3)
torch_h = int(torch_w / (torch.width / torch.height))
torch_resized = torch.resize((torch_w, torch_h), Image.Resampling.LANCZOS)

# Create a canvas large enough to hold both
canvas_w = max(outline.width, torch_w)
canvas_h = max(outline.height, torch_h)
canvas = Image.new('RGBA', (canvas_w, canvas_h), (0, 0, 0, 0))

# Calculate positions to center both images
outline_x = (canvas_w - outline.width) // 2
outline_y = (canvas_h - outline.height) // 2

torch_x = (canvas_w - torch_w) // 2
torch_y = (canvas_h - torch_h) // 2

# Paste outline
canvas.paste(outline, (outline_x, outline_y), outline)

# Paste torch
canvas.paste(torch_resized, (torch_x, torch_y), torch_resized)

# Save the original for backup just in case
import shutil
shutil.copy2('images/indiana-torch-icon.png', 'images/indiana-torch-icon.bak.png')

# Save
canvas.save('images/indiana-torch-icon.png')
print("Successfully generated new indiana-torch-icon.png")
