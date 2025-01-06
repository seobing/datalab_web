# _plugins/remove_headings_filter.rb
module Jekyll
    module RemoveHeadingsFilter
      def remove_md_headings(input)
        return '' if input.nil?
  
        input
          .lines
          # 정규식으로, 줄 앞부분에 #이 1개 이상 붙은 경우 제거
          .reject { |l| l.match?(/^#{1,6}\s/) }
          .join
      end
    end
  end
  
  Liquid::Template.register_filter(Jekyll::RemoveHeadingsFilter)
  